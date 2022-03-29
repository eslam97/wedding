<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= 'orders';
    protected $fillable = [
        'id',
        'order_num',
        'total_amount',
        'user_id',
        'hall_id',
        'bank_transaction_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    // offers
    public function user(){
        return $this->belongsTo('App/Models/User', 'user_id', 'id');
    }
}
