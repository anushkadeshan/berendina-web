<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    public $fillable = [
       'name',
       'email',
       'sex',
       'message',
       'cv',
       'career_id',
    ];




}
