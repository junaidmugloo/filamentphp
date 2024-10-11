<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    use HasFactory;
    protected $table = 'offers';
    protected $fillable = [
        'name',
        'description',
        'image',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
