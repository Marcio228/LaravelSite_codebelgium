<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Tzsk\Payu\Fragment\Payable;

class CoursePayment extends Model
{

	use Payable;

    protected $table = 'course_payments';

    protected $fillable = ['subscription_id', 'user_id', 'amount', 'status', 'local_trx_id', 'gtw_trx_id', 'bank_reference_number', 'bank_code', 'card_number', 'name_on_card', 'issuing_bank', 'card_type', 'status', 'status_detail', 'gateway', 'mode'];


    /**
     * Always capitalize the name when we save it to the database
     */
    public function setStatusAttribute($status)
    {
        //If status not given
        if($status == null || $status == '' )
            return null;

        $status = strtolower($status);

        $successArr = array("successful", "success", "completed");
        $failureArr = array("failed", "fail", "failure");
        $refundArr = array("refund", "refunded");

        if(in_array($status, $successArr))
            $this->attributes['status'] = 'success';

        if(in_array($status, $failureArr))
            $this->attributes['status'] = 'fail';

        if(in_array($status, $refundArr))
            $this->attributes['status'] = 'refunded';

        else
            $this->attributes['status'] = $status;
    }

    /**
     * Scope to only include successful payments.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSuccessful($query)
    {
        return $query->where('status', "success");
    }


    public function user()
    {
        return $this->belongsTo('App\Models\Auth\User', 'user_id', 'id');
    }

    public function courseSubscription()
    {
        return $this->belongsTo('App\Models\CourseSubscription', 'subscription_id', 'id');
    }

}
