<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerJob extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function employerJobEmployee()
    {
        return $this->hasMany(EmployerJobEmployee::class);
    }
}
