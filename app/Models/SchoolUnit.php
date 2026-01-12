<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolUnit extends Model
{
    /** @use HasFactory<\Database\Factories\SchoolUnitFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
