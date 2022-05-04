<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairRequest extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}
