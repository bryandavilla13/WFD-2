<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Study_Plans extends Model
{
    use HasFactory;

    protected $table='study_plans';

    protected $primaryKey = "study_plans_id";

    public function student():BelongsTo
    {
        return $this->belongsTo(Units::class);
    }

    public function course():BelongsTo
    {
        return $this->BelongsTo(Courses::class);
    }
}
