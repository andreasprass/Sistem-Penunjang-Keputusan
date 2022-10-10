<?php

namespace App\Models;

use App\Models\Division;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'positions';

    // Eloquent Relational Method
    public function user(){
        return $this->hasMany(User::class);
    }

    public function division(){
        return $this->belongsTo(Division::class);
    }

    protected $fillable = [
        'division_id',
        'name_pos',
    ];
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        
    ];
}
