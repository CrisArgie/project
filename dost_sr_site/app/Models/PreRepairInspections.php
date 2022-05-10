<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRepairInspections extends Model
{
    use HasFactory;

    public function repairrequests()
    {
        return $this->hasMany(RepairRequest::class);
    }

    public function post_repair_inspections()
    {
        return $this->hasOne(PostInspections::class);
    }
}
