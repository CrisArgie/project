<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;


    public $timestamps = false;

    public function ictrequest()
    {
        return $this->hasMany(IctRequests::class, 'ict_forms_id', 'id');
    }

    public function repairrequest()
    {
        return $this->hasMany(RepairRequest::class, 'equipment_id', 'id');
    }
}
