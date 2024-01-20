<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category; 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $fillable=['name','location','description','is_active','status','date'];
    public function user()  {
        return $this->belongsTo(User::class);
    }
    public function category()  {
        return $this->belongsTo(Category::class);
    }

}
