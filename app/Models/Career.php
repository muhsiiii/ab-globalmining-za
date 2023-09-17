<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $table='careers';


    public function Getjob()
    {
        return $this->belongsTo(Job::class, 'job','id');
    }
}
