<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    const TYPES = [
        1 => 'an Online Event',
        2 => 'an Venue Event',
    ];


    use HasFactory;
    protected $fillable = ['name', 'slug', 'place','category_id', 'description', 'is_active', 'type', 'date', 'start_at', 'duration'];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function tickets():HasMany
    {
        return $this->hasMany(Ticket::class);
    }
    public function FormatDate($date)
    {
        $locale = app()->getLocale();
        Carbon::setLocale($locale);

        $format = $locale === 'en' ? 'F d, Y' : 'd M Y';
        return $date ? Carbon::parse($date)->translatedFormat($format) : null;
    }
}
