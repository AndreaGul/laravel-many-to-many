<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['slug'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function technologys()
    {
        return $this->belongsToMany(Technology::class);
    }
}
