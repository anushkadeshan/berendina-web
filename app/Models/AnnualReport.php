<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnualReport extends Model
{
    use HasFactory;
    public $fillable = ['title','thumb_url','file_url','added_by','isPublished','company','year'];
}
