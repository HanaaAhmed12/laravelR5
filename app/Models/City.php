<?php

namespace App\Models;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'city',
    ];

    public function clients(){
        return $this->hasMany(Client::class);
    }
}