<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table= 'details';
    protected $fillable = [
        'id',
        'address',
        'phone',
        'user_id',
        'hall_id'
    ];
    protected $hidden = [
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
            public function endpayment(){
                return $this->hasOne('App\Models\Endpayment', 'details_id', 'id');
            }
    
            ###########################end relations#######################
}
