<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function trainingTopic()
    {
        return $this->hasMany(TrainingTopic::class);
    }

    public function trainingUser()
    {
        return $this->hasMany(TrainingUser::class);
    }
}
