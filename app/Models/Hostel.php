<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    use HasFactory;

    protected $fillable = [
        'hostel_name', 'uni_name', 'state',
        'city', 'address', 'price',
        'description', 'amenities', 'image_name',
    ];

    public function agentFunc() {
        return $this->belongsTo(Agent::class);
    }
}
