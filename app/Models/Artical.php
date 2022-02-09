<?php

namespace App\Models;
use  App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    public $timestamps = false;
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
