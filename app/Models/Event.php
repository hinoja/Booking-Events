<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'place', 'description', 'is_active', 'status', 'date', 'start_at', 'duration'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function FormatDate($date)
    {
        $locale = app()->getLocale();
        Carbon::setLocale($locale);

        $format = $locale === 'en' ? 'F d, Y' : 'd M Y';
        return $date ? Carbon::parse($date)->translatedFormat($format) : null;
    }
}
