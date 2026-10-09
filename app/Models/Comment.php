<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
        use HasFactory;

    protected $fillable = [
        //insercion masiva a la base de datos
        'id',
        'post_id',
        'body' 
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}