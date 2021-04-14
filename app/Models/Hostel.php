<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    use HasFactory;

    protected $fillable = [
        'hostel_name', 'town', 'state',
        'address', 'property', 'RoomNum',
        'amount', 'period','Amenities', 'utilities',
        'rules','tenantType','image_name',
    ];

    public function agentFunc() {
        return $this->belongsTo(Agent::class);
    }
}
