
<?php

use App\Http\Controllers\HabitController;
use App\Http\Controllers\HabitLogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

 
    // Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::middleware('auth')->get('/profile/edit', function () {
        return view('profile.edit');
    })->name('profile.edit');
    

    // Only use the routes for creating, storing, and displaying habits
    Route::resource('habits', HabitController::class)->only(['index', 'create', 'store']);
    
    // Route to track a habit
    Route::post('/habits/{habit}/track', [HabitLogController::class, 'store'])->name('habits.track');

    // Route to show all habit logs for a specific habit
    Route::get('/habits/{habit}/logs', [HabitLogController::class, 'index'])->name('habits.logs');
    
    Route::delete('/habitLogs/{log}', [HabitLogController::class, 'destroy'])->name('habitLog.destroy');
    

require __DIR__.'/auth.php';
