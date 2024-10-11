<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [
        'name',
        'image',
    ];


    protected static function booted()
    {
        static::deleting(function ($category) {
            if ($category->image) {
                // Delete the image file from the 'public' disk
                Storage::disk('public')->delete($category->image);
            }
        });
    }
}
