<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostRepairInspections extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'repair_shop',
        'repair_shop_date',
        'invoice_no',
        'job_order_no',
        'job_order_date',
        'amt_no',
        'payable_account',
        'recommendation',
        'pre_repair_inspections_id',
        'status',
    ];

    public function pre_repair_inspections()
    {
        return $this->belongsTo(PreRepairInspections::class);
    }
}
