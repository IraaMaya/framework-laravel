<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // tentukan kolom yang boleh diisi
    protected $fillable = ['title', 'content', 'author_id'];

    // relasi dengan model author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
