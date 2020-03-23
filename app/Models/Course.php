<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $table = 'courses';

    protected $fillable = ['name', 'slug', 'total_fees', 'center_id', 'start_payment'];


    public function courseSubscriptions(){
        return $this->hasMany('App\Models\CourseSubscription');
    }

    public function instructor()
    {
        return $this->belongsTo('App\Models\Auth\User', 'instructor_id', 'id');
    }

    public function batches(){
        return $this->hasMany('App\Models\Batch');
    }

}
