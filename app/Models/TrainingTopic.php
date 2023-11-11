<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingTopic extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function trainingTopicContent()
    {
        return $this->hasMany(TrainingTopicContent::class);
    }

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
