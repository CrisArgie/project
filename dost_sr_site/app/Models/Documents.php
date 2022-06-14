<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [
        'path_name',
    ];

    public function ictrequest()
    {
        return $this->hasMany(IctRequests::class, 'documents_id', 'id');
    }
}
