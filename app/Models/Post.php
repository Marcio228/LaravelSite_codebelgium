<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{

    protected $table = 'posts';

    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'feature_media_type', 'feature_media_data', 'published_at', 'author_id', 'status', 'keywords', 'featured'];


    public function author()
    {
        return $this->belongsTo('App\Models\Auth\User', 'author_id', 'id');
    }

    public function getThumbnailAttribute()
    {
    	if($this->feature_media_type == 'image')
    		return $this->feature_media_data ;
    }

    public function getThumbnailLinkAttribute()
    {
        if($this->feature_media_type == 'image')
            return config('app.url').'/'.config('directory.post-media').$this->feature_media_data ;
    }

    public function getLinkAttribute()
    {
        return config('app.url').'/blog/'.$this->slug;
    }

    public function getMinExcerptAttribute()
    {
        return substr($this->excerpt,0,50).'...';
    }

    public function getPublishedDateAttribute()
    {
    	return Carbon::parse($this->published_at)->diffForHumans();
    }


    public function category(){
        return $this->belongsTo('App\Models\PostCategory');
    }

}
