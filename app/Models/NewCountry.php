<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewCountry extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function GetAllcountries()
    {
        return $this->belongsTo(Job::class, 'country','id');
    }

}

