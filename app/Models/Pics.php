<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pics extends Model
{
    protected $table = 'pics';
    protected $fillable = [
        'pic1',
        'pic2',
        'pic3',
        'pic4',
        'pic5',
        'pic6',
        'pic7',
        'pic8',
        'pic9',
        'pic10',
        'hall_id',
        'created_at',
        'Updated_at'
    ];
}
