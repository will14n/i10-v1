<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'content',
    ];

    protected $with = ['categories'];

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
