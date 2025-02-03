<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habit;
use App\Models\HabitLog;
use Carbon\Carbon;

class HabitLogController extends Controller
{
    /**
     * Store a habit log entry.
     */
    // HabitLogController.php

public function store(Request $request, Habit $habit)
{
    // Validate the request
    $validated = $request->validate([
        'date' => 'required|date',
        'completed' => 'required|boolean',
    ]);

    // Create a new habit log
    HabitLog::create([
        'habit_id' => $habit->id,
        'date' => $validated['date'],
        'completed' => $validated['completed'],
    ]);

    // Redirect back to the habit index or another page
    return redirect()->route('habits.index')->with('success', 'Habit tracked successfully!');
}

    /**
     * Show all habit logs for a specific habit.
     */
    public function index(Habit $habit)
    {
        $habitLogs = $habit->habitLogs()->orderBy('date', 'desc')->get();

        return view('habit_logs.index', compact('habit', 'habitLogs'));
    }

    /**
     * Delete a habit log entry.
     */
    public function destroy(HabitLog $log)
    {
        $log->delete();
        return redirect()->route('habits.logs', $log->habit_id)->with('success', 'Habit log deleted successfully');
    }
    
}
