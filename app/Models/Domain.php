<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function job()
    {
        return $this->hasMany(Job::class);
    }
    public function skill()
    {
        return $this->hasMany(Skill::class);
    }
}
