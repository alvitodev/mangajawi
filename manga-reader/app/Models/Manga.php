<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'cover_image', 'genre'];
    public function chapters(){
        return $this->hasMany(Chapter::class);
    }
}
