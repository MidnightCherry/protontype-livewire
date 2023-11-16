<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardDetail extends Model
{
    protected $fillable = [ 
        'user_id',
        'name_on_card', 
        'card_number', 
        'expiration_month', 
        'expiration_year', 
        'cvv'
    ];

    public function setCardNumberAttribute($value)
    {
        $this->attributes['card_number'] = encrypt($value);
    }

    public function getCardNumberAttribute($value)
    {
        return decrypt($value);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    use HasFactory;

}


