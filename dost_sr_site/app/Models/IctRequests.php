<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IctRequests extends Model
{
    use HasFactory;

    // protected $with = ['equipment', 'ict_forms', 'images', 'documents'];
    public $timestamps = false;


    public function ict_forms()
    {
        return $this->belongsTo(IctForms::class);
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
