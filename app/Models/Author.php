<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // tentukan kolom yang boleh diisi
    protected $fillable = ['name', 'email'];

    // relasi dengan model post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
