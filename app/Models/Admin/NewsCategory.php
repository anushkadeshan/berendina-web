<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    public $table = 'news_categories';

    protected $fillable = ['name'];
}
