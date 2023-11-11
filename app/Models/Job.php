<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    public function employerJob()
    {
        return $this->hasMany(EmployerJob::class);
    }
}
