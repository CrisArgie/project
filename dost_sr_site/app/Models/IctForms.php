<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IctForms extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsto(Users::class);
    }

    public function type_of_requests()
    {
        return $this->belongsTo(TypeOfRequests::class);
    }

    public function arearequests()
    {
        return $this->hasMany(AreaRequests::class);
    }

    public function ictrequests()
    {
        return $this->hasMany(IctRequests::class);
    }
}
