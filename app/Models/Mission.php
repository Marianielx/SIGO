<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{ Model, SoftDeletes };

class Mission extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'missions';
    protected $guarded = ['id'];
    protected $dates = ['delected_at'];
}
