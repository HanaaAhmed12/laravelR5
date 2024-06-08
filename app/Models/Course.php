<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'title',
    ];
    use HasFactory;
    public function students()
    {
        
        return $this->belongsToMany(Student::class);
    }
}