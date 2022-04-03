<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $table = 'halls';
    protected $fillable = [
        'id',
        'name',
        'master_img',
        'desc',
        'price',
        'actual_price'
    ];

        ############################ relations ########################

        public function endpayment(){
           return $this->hasMany('App\Models\Endpayment', 'hall_id', 'id');
        }
        public function details(){
            return $this->hasOne('App\Models\Details', 'hall_id', 'id');
        }
        ###########################end relations#######################

}
