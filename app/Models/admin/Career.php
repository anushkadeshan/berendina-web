<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'title',
        'si_title',
        'ta_title',
        'job_description',
        'si_job_description',
        'ta_job_description',
        'closing_date',
        'company',
        'is_published',
    ];
}
