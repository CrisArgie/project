<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairRequest extends Model
{
    use HasFactory;

    // public $timestamps = true;
    protected $fillable = [
        'date_requested',
        'request_no',
        'description_of_property_type',
        'location',
        'acquisition_date',
        'acquisition_cost',
        'problem_encountered',
        'corrective_action_performed',
        'status',
        'users_id',
        'equipment_id'
    ];
    protected $guarded = [];
    protected $with = ['equipment', 'prerepairinspections'];

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
        return $this->hasMany(PreRepairInspections::class, 'repair_requests_id', 'id');
        // return $this->hasMany(PreRepairInspections::class);

    }
}
