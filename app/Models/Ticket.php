<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    use HasFactory;
    const TYPES = [
        1 => 'Free',
        2 => 'Premium',
    ];
    protected $fillable = ['name', 'slug', 'place', 'description', 'is_active', 'status', 'date', 'start_at', 'duration'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function event():BelongsTo
    {
        return $this->belongsTo(User::class, 'event_id');
    }
}
