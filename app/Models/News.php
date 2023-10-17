<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $primaryKey = 'id';

    protected $fillable=[
        'title',
        'description',
        'user_id',
        'category_id'
    ];

    public function news(){
        return $this->belongsTo(User::class);
        return $this->belongsTo(Category::class);
    }
}
