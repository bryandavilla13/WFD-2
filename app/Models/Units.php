<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Units extends Model
{
    use HasFactory;

    protected $table='units_table';

    protected $primaryKey = "id_units";

    public function students(): HasMany 
    {
        return $this->hasMany(Students::class, 'unit');
    }

    public function courses(): HasMany
    {
        return $this->hasMany(Courses::class, 'unit');
    }

}
