<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{ Model, SoftDeletes};

class trustPerson extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'trust_people';
    protected $guarded = ['id'];
    protected $dates = ['delected_at'];
}
