<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $attributes =
        [
            'rating' => 3
        ];

    protected $fillable =
        [
            'event_id',
            'user_id',
            'rating',
            'title',
            'comment'
        ];

    protected $casts =
        [
            'rating' => 'integer'
        ];

    public function event(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
