<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Figure extends Model
{
    use HasFactory;

    public $fillable = [
        'figure_name_en', 'figure_name_si', 'figure_name_ta', 'amount', 'icon_location', 'style', 'order',
    ];
}
