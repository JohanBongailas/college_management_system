<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class College extends Model
{
    use HasFactory;
    // Allow mass assignment
    protected $fillable = ["name", "address"];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}