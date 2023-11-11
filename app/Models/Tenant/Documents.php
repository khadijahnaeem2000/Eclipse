<?php

namespace App\Models\Tenant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $table = 'documents';
    protected $primaryKey = 'id';

    protected $fillable = ['upload_only','acknowledge_document','sign_document','set_expiry','user_set_expiry','expiration_within_price','upload_file','credential_id'];


}
