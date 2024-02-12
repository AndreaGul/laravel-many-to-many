<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{   
    //model creato con il comando  php artisan make:model -msrRc
    use HasFactory;

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}

   
