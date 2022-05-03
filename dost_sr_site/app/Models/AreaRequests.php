<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaRequests extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function ictforms()
    {
        return $this->hasMany(IctForms::class);
    }

    public function areaofrequests()
    {
        return $this->hasMany(AreaOfRequests::class);
    }
}
