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
        'hall_id',
        'user_id',
        'status_payment',
        'details_id',
        'created_at',
        'updated_at',
        'team_id'
    ];
    protected $hidden = [
        'hall_id',
        'user_id',
        'created_at',
        'updated_at'  
    ];

    ############################ relations ########################
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function hall(){
       return $this->belongsTo('App\Models\Hall', 'hall_id', 'id');
    }
    public function details(){
        return $this->belongsTo('App\Models\Details', 'details_id', 'id');
    }
    public function invoce(){
        return $this->hasOne('App\Models\Invoce', 'endpayment_id', 'id');
     }
     public function team(){
        return $this->belongsTo('App\Models\Team', 'team_id', 'id');
     }
    ###########################end relations#######################
    public function getStatus_payment(){
        return   $this -> status_payment == 1 ? 'Approved'  : 'Rejected ';
    }
}
