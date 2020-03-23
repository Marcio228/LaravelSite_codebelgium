<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{

    protected $table = 'applications';

    protected $fillable = ['name', 'email', 'phone', 'course', 'gender', 'batch', 'referral', 'privacy', 'newsletter', 'captcha_data'];


}
