<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IctForms extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['ict_requests', 'arearequests', 'type_of_requests'];

    protected $fillable = [
        'date_requested',
        'request_no',
        'users_id',
        'type_of_requests_id',
        'type_request_description',
        'status',
        'equipment_id',
    ];

    public function users()
    {
        return $this->belongsto(Users::class);
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }

    public function type_of_requests()
    {
        return $this->belongsTo(TypeOfRequests::class);
    }

    public function arearequests()
    {
        return $this->hasMany(AreaRequests::class, 'ict_forms_id', 'id');
    }

    public function ict_requests()
    {
        return $this->hasMany(IctRequests::class, 'ict_forms_id', 'id');
    }
}
