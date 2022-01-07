<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casestudy extends Model
{
    use HasFactory;

    public $table = 'case_studies';

    public $fillable = [
        'title',
        'description',
        'image',
        'si_title',
        'si_description',
        'ta_title',
        'ta_description',
        'category',
        'active',
    ];
}
