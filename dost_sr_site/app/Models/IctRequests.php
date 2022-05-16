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
        return $this->belongsTo(Equipment::class);
    }

    public function images()
    {
        return $this->belongsTo(Images::class);
    }

    public function documents()
    {
        return $this->belongsTo(Documents::class);
    }
}
