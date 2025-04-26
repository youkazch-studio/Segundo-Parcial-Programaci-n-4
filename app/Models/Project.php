<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['name', 'description', 'user_id'];

    public function owner() {
        return $this->belongsTo(User::class, 'owner_id');
    }
    
    public function tasks() {
        return $this->hasMany(Task::class);
    }
    
}
