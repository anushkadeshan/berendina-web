<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchContact extends Model
{
    use HasFactory;

    public $fillable = [
        'district', 'company', 'branch_name', 'address', 'telephone', 'lat', 'lng'
    ];
}
