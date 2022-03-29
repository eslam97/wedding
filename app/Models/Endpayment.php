<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Endpayment extends Model
{
    protected $table = 'endpaymnts';
    protected $fillable = [
        'id',
        'payment_status_id',
        'payment_type',
        'payment_brand',
        'amount',
        'desc',
        'user_id',
        'status_payment',
        'created_at',
        'updated_at'
    ];
    public function user(){
/*        return $this->belongsTo('App\Models\User', 'user_id', 'id');*/
    }
    public function hall(){
/*        return $this->hasOne('App\Models\Hall', 'hall_id', 'id');*/
    }
}
