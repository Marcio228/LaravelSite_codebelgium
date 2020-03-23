<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Tzsk\Payu\Fragment\Payable;

class CourseSubscription extends Model
{

	use Payable;

    protected $table = 'course_Subscriptions';

    protected $fillable = ['course_id', 'user_id', 'total_fees', 'batch_id', 'payment_type'];



    public function user()
    {
        return $this->belongsTo('App\Models\Auth\User', 'user_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_id', 'id');
    }

    public function coursePayments(){
        return $this->hasMany('App\Models\CoursePayment');
    }

    public function batch(){
        return $this->belongsTo('App\Models\Batch', 'batch_id', 'id');
    }


    public static function subscribeUser($user, $course, $total_fees = 0){
        $courseSubscription = CourseSubscription::firstOrCreate([
            'user_id' => $user->id,
            'course_id' => $course->id,
        ]);
        if($courseSubscription->total_fees == 0)
        {
            if($total_fees == 0)
                $courseSubscription->total_fees = $courseSubscription->course->fees;
            else
                $courseSubscription->total_fees = $total_fees;
        }
        $courseSubscription->save();
        return $courseSubscription;
    }
}