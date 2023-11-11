<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'email',
        'password',
        'tel',
        'username',
        'role',
        'website',
        'regNo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function userSkill()
    {
        return $this->hasMany(UserSkill::class);
    }
    public function trainingUser()
    {
        return $this->hasMany(TrainingUser::class);
    }
    public function employerJob()
    {
        return $this->hasMany(EmployerJob::class);
    }
    public function employerJobEmployee()
    {
        return $this->hasMany(EmployerJobEmployee::class);
    }

}
