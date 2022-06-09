<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'page_count', 'publisher', 'published_date', 'isbn', 'description', 'image', 'rating'];
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function author()
    {
        return $this->belongsToMany(Author::class);
    }
}
