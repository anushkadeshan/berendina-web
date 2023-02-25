<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PressRelease extends Model
{
    use HasFactory;

    public $fillable = [
        'title', 'sn_title', 'ta_title', 'thumb', 'photo', 'published_date', 'company', 'added_by', 'isPublished',
    ];
}
