<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'photos';

    public $fillable = [
        'title', 'si_title', 'ta_title', 'thumb', 'company', 'added_by', 'isPublished'
     ];

     /**
      * Get all of the comments for the Photo
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasMany
      */
     public function photos()
     {
         return $this->hasMany(Photo::class, 'album_id');
     }
}
