<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Habit;

class HabitSeeder extends Seeder
{
    public function run()
    {
        Habit::create([
            'user_id' => 1, // Change this to an actual user ID
            'name' => 'Exercise',
            'description' => 'Do 30 minutes of workout',
            'frequency' => 'daily',
        ]);
        Habit::create([
            'user_id' => 1, // Change this to an actual user ID
            'name' => 'Read',
            'description' => 'Read a book for 30 minutes',
            'frequency' => 'daily',
        ]);

        Habit::create([
            'user_id' => 1, // Change this to an actual user ID
            'name' => 'Meditate',
            'description' => 'Meditate for 10 minutes',
            'frequency' => 'daily',
        ]);
    
    }
}

