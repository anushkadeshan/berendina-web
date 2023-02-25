<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conatct extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    public $fillable = [
        'name', 'email', 'subject', 'phone', 'message', 'action_taken',
    ];
}
