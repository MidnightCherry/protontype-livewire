<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'company_name', 
        'company_registration_number', 
        'sst_registration_number',
        'company_address_line_1', 
        'company_address_line_2', 
        'city', 
        'state', 
        'post_code', 
        'country',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
