<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfRequests extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function ictforms()
    {
        return $this->hasMany(IctForms::class, 'type_of_requests_id', 'id');
    }
}
