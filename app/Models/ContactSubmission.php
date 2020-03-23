<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{

    protected $table = 'contact_submissions';

    protected $fillable = ['name', 'email', 'phone', 'message', 'captcha_data'];


}
