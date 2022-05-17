<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRepairInspections extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'repair_requests_id',
        'status',
        'detail_of_defects',
        'date_of_latest_repair',
        'mature_of_latest_repair',
        'pre_repair_assessment_done',
    ];

    public function repair_requests()
    {
        return $this->belongsTo(RepairRequest::class);
    }

    public function post_repair_inspections()
    {
        return $this->hasOne(PostInspections::class);
    }
}
