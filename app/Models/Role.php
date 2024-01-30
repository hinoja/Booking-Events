<?php

namespace App\Models;


use App\Models\User;
use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function events()  {
        return $this->belongsTo(Event::class);
    }
    public function users()  {
        return $this->hasMany(User::class);
    }

}
