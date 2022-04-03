<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
            ############################ relations ########################
            public function endpayment(){
                return $this->hasMany('App\Models\Endpayment', 'team_id', 'id');
            }
    
            ###########################end relations#######################
}
