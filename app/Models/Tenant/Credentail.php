<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credentail extends Model
{
    use HasFactory;



    public function accommodations()
    {
        return $this->belongsToMany(Credentail::class, AccommodationsCredential::class, 'credential_id', 'accommodation_id');
    }
    
    public function services()
    {
        return $this->belongsToMany(Credentail::class, ServicesCredential::class, 'credential_id', 'service_id');
    }
}
