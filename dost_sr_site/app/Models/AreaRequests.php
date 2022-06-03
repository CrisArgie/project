<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaRequests extends Model
{
    use HasFactory;
    protected $with = ['area_of_requests'];
    public $timestamps = false;

    public function ictforms()
    {
        return $this->belongsTo(IctForms::class);
    }

    public function area_of_requests()
    {
        return $this->belongsTo(AreaOfRequests::class, 'area_of_requests_id', 'id');
    }
}
