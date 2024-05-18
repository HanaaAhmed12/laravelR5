<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    public $timestamps = true;
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'StudentName',
        'age',
        'phone',
        'email',
    ];
}