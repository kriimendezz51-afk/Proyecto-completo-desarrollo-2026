<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $table = 'posts';
    protected $fillable = [
        //insercion masiva a la base de datos
        'id',
        'user_id',
        'title',
        'body' 
    ];
        public function user()
    {
        return $this->hasMany(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}