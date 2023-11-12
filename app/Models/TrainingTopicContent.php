<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingTopicContent extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function trainingTopic()
    {
        return $this->belongsTo(TrainingTopic::class);
    }
}
