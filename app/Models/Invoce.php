<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoce extends Model
{
    protected $table = 'invoices';
    protected $fillable = [
        'id',
        'name',
        'numberofinvoce',
        'endpayment_id',
        'created_at',
        'updated_at'
    ];

        ############################ relations ########################

        public function endpayment(){
           return $this->belongsTo('App\Models\Endpayment', 'endpayment_id', 'id');
        }
        public function hall(){
            return $this->hasManyThrough('App\Models\Hall', 'App\Models\Endpayment','endpayment_id', 'hall_id', 'id', 'id');
        }
        ###########################end relations#######################

}
