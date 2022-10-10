<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Division extends Model
{
    use HasFactory;

    
    public function position(){
        return $this->hasMany(Position::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
}
