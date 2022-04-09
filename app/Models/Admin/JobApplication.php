<?php

namespace App\Models\Admin;

use App\Models\admin\Career;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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


    /**
     * Get the user that owns the JobApplication
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function career()
    {
        return $this->belongsTo(Career::class, 'career_id', 'id');
    }

}
