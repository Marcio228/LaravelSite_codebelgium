<?php

namespace App\Models\Auth;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\Traits\CausesActivity;
use Spatie\Permission\Traits\HasRoles;
use Date;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media; //For Media conversion

class User extends Authenticatable implements MustVerifyEmail, HasMedia
{
    use Notifiable, HasMediaTrait;
    use CausesActivity;
    use HasRoles;

    protected $guard_name = 'web';
    
    protected static $logName = 'user_activity';


    //Log only changed attribute
    protected static $logOnlyDirty = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'first_name', 'middle_name', 'last_name', 'email', 'phone', 'password', 'email_verified_at', 'last_login_at', 'last_login_ip',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //Media Collections for User
    public function registerMediaCollections()
    {
        $this->addMediaCollection('user_pic')
            ->singleFile()
            ->useDisk('public')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('thumb')
                    ->keepOriginalImageFormat()
                    ->fit('crop', 100, 100);

                $this
                    ->addMediaConversion('small')
                    ->keepOriginalImageFormat()
                    ->fit('crop', 300, 300);

                $this
                    ->addMediaConversion('medium')
                    ->keepOriginalImageFormat()
                    ->fit('crop', 500, 500);

                $this
                    ->addMediaConversion('large')
                    ->keepOriginalImageFormat()
                    ->fit('crop', 800, 800);
            });

        $this->addMediaCollection('social_pic')
            ->useDisk('public')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('thumb')
                    ->keepOriginalImageFormat()
                    ->fit('crop', 100, 100);
            });
    }


    /**
     * Get the user's picture.
     *
     * @param  string  $value
     * @return void
     */
    public function getAvatarAttribute($avatar)
    {

        $userAvatar = $this->getMedia('user_pic');
        if(isset($userAvatar[0]))
            return $userAvatar[0]->getFullUrl('thumb');

        $socialAvatar = $this->getMedia('social_pic');
        if(isset($socialAvatar[0]))
            return $socialAvatar[0]->getFullUrl('thumb');

        // If no pic available
        try {
                // Check for gravatar
                $gravatar = 'https://www.gravatar.com/avatar/' . md5(strtolower($this->getAttribute('email'))).'?size=100&d=404';

                $client = new \GuzzleHttp\Client(['verify' => false]);

                $client->request('GET', $gravatar)->getBody()->getContents();

                return $gravatar;
            } catch (\Exception $e) {
                // 404 Not Found
                return null;
            }
    }


    /**
     * Get last logged in attribute
     */
    public function getLastLoggedInAtAttribute($value)
    {
        // Date::setLocale('tr');

        if (!empty($value)) {
            return Date::parse($value)->diffForHumans();
        } else {
            return trans('auth.never');
        }
    }

    /**
     * Always capitalize the name when we save it to the database
     */
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst($value);
    }

    /**
     * Always capitalize the name when we save it to the database
     */
    public function setMiddleNameAttribute($value)
    {
        $this->attributes['middle_name'] = ucfirst($value);
    }

    /**
     * Always capitalize the name when we save it to the database
     */
    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = ucfirst($value);
    }



    /**
     * Always capitalize the name when we save it to the database
     */
    public function getFullNameAttribute()
    {
        $fName = $this->attributes['first_name'];
        $mName = $this->attributes['middle_name'];
        $lName = $this->attributes['last_name'];

        return $fName . " " . $mName . " " . $lName ;
    }

    /**
     * get first name
     */
    public function getNameAttribute()
    {
        $fName = $this->attributes['first_name'];

        return $fName;
    }


    /**
     * set first and last name
     */
    public function setNameAttribute($value)
    {
        $arr = explode(' ', $value);
        $num = count($arr);
        $first_name = $middle_name = $last_name = null;


        if ($num < 1) {
            return;
        }
        else if ($num == 1) {
            $this->attributes['first_name'] = $arr[0];
        } else if ($num==2) {
            $this->attributes['first_name'] = $arr[0];
            $this->attributes['last_name'] = $arr[1];
        }
        else
        {
            $this->attributes['first_name'] = $arr[0];
            $this->attributes['last_name'] = $arr[$num-1];
            $this->attributes['middle_name'] = $arr[1];
        }
    }


    /**
     * Social Media Accounts
     */
    public function accounts(){
        return $this->hasMany('App\Models\Auth\LinkedSocialAccount');
    }
}
