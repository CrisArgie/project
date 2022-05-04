<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IctRequests extends Model
{
    use HasFactory;


    public $timestamps = false;


    public function ict_forms()
    {
        return $this->hasMany(IctForms::class);
    }

    public function equipment()
    {
        return $this->hasMany(Equipment::class);
    }

    public function imagesfile()
    {
        return $this->hasMany(Images::class);
    }

    public function documentfile()
    {
        return $this->hasMany(Documents::class);
    }
}
