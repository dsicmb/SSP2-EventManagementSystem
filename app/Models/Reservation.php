<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hotel_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'country',
        'city',
        'state',
        'zip_code',
        'card_number',
    ];

    public function event(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Guest',
        ]);
    }
}