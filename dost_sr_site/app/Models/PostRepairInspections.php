<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostRepairInspections extends Model
{
    use HasFactory;

    public function pre_repair_inspections()
    {
        return $this->belongsTo(PostInspections::class);
    }
}
