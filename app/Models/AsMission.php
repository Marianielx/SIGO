<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{ Model, SoftDeletes };

class AsMission extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'as_missions';
    protected $guarded = ['id'];
    protected $dates = ['delected_at'];   

     public function mission()
    {
        return $this->hasMany(AsMission::class, 'fk_idMission');
    }

    public function agent()
    {
        return $this->hasMany(Agent::class, 'fk_idAgent');
    }
}