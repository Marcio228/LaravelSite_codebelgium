<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{

    protected $table = 'batches';

    protected $fillable = ['name', 'timings', 'course_id', 'center_id'];


    public function courseSubscriptions(){
        return $this->hasMany('App\Models\CourseSubscription');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_id', 'id');
    }

    public function center()
    {
        return $this->belongsTo('App\Models\Center', 'center_id', 'id');
    }

}
