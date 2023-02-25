<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;

    public $fillable = [
        'name', 'display_name', 'designation', 'profile', 'photo', 'company', 'is_published', 'order_id',
    ];
}
