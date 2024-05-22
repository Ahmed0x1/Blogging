<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',// this is a column at the table which in database
        'description',// this is a column at the table which in database
        'user_id',
    ];

    public function user()//for return post's user 
    {
        return $this->belongsTo(User::class);
    }
}
