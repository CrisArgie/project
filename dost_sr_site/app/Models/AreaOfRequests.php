<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaOfRequests extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function arearequests()
    {
        return $this->hasMany(AreaRequests::class, 'area_of_requests_id', 'id');
    }
}
