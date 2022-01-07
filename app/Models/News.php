<?php

namespace App\Models;

use App\Models\admin\NewsCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [ 'title', 'description', 'image', 'added_by', 'likes', 'published', 'si_title', 'si_description', 'ta_title', 'ta_description', 'categories'];

    /**
     * The roles that belong to the News
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(NewsCategory::class, 'news_categries', 'news_id', 'category_id');
    }
}
