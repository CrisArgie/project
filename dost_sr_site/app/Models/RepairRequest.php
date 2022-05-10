<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairRequest extends Model
{
    use HasFactory;

    // public $timestamps = true;

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }

    public function prerepairinspections()
    {
        return $this->belongsTo(PreInspections::class);
    }
}
