<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Students extends Model
{
    use HasFactory;

    protected $table='students';

    protected $primaryKey = "id_students";

    public function unit():BelongsTo
    {
        return $this->belongsTo(Units::class, 'unit');
    }

    public function studyPlans():HasMany
    {
        return $this->hasMany(Study_plans::class);
    }
}
