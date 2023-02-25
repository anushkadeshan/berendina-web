<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    public $fillable = [
        'title', 'image', 'parallax_value', 'data_index',
    ];

    /**
     * Get all of the comments for the Slider
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function layers()
    {
        return $this->hasMany(SliderLayer::class, 'slider_id', 'id');
    }

    /**
     * Get the user associated with the Slider
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function button()
    {
        return $this->hasOne(SliderButton::class, 'slider_id', 'id');
    }
}
