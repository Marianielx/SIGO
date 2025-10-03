<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{  Model, SoftDeletes };

class TrustPersonTask extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'trust_people_task';
    protected $guarded = ['id'];
    protected $dates = ['delected_at'];
}
