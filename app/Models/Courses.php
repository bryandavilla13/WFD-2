<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Courses extends Model
{
    use HasFactory;

    protected $table='courses';

    protected $primaryKey = "courses_id";

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Units::class, 'unit');
    }

    public function studyPlans():HasMany
    {
        return $this->hasMany(Study_Plans::class);
    }
    

}
