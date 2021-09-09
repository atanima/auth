<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organism extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'organisms_users',
            'organism_id',
            'user_id');
    }
}
