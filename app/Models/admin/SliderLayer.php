<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderLayer extends Model
{
    use HasFactory;

    public $fillable = [
        'title', 'si_title', 'ta_title', 'data_y', 'data_x', 'data_v_offset', 'data_h_offset', 'text_upper_case', 'bg_color', 'text_color', 'text_align', 'fontsize', 'start_delay', 'line_height', 'slider_id',
    ];
}
