<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];

    
    public function projects() {
        return $this->hasMany(Project::class, 'owner_id');
    }
    
    public function tasks() {
        return $this->hasMany(Task::class, 'assigned_to');
    }
    
}
