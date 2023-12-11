<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persons extends Model
{
    protected $table = 'persons';
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];
}
