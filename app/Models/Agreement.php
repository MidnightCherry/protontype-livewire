<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'terms_of_service_agreed', 
        'privacy_notice_agreed', 
        'payment_terms_agreed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
