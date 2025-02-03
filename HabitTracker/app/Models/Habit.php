<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'description', 'frequency'];

    public function habitLogs()
    {
        return $this->hasMany(HabitLog::class);
    }
}
