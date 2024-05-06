<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'subject', 'message', 'response',
    ];

    // ACCESSORS
    public function getCreatedAtAttribute($created_at)
    {
        return $this->getFormatedDateTime($created_at);
    }

    public function getUpdatedAtAttribute($updated_at)
    {
        return $this->getFormatedDateTime($updated_at);
    }
    public function FormatDate($date)
    {
        $locale = app()->getLocale();
        Carbon::setLocale($locale);

        $format = $locale === 'en' ? 'F d, Y' : 'd M Y';

        return $date ? Carbon::parse($date)->translatedFormat($format) : null;
    }
}
