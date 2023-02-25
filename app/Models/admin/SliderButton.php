<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderButton extends Model
{
    use HasFactory;

    protected $table = 'slider_layers_button';

    public $fillable = [
        'button_title', 'button_si_title', 'button_ta_title', 'button_link', 'data_y', 'data_x', 'data_v_offset', 'data_h_offset', 'text_upper_case', 'bg_color', 'text_color', 'start_delay', 'button_shape', 'slider_id',
    ];
}
