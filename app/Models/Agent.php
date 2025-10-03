<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{ Model, softDeletes };

class Agent extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'agents';
    protected $guarded = ['id'];
    protected $dates = ['delected_at'];
}
