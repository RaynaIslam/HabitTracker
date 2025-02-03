<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habit;
use Illuminate\Support\Facades\Auth;

class HabitController extends Controller
{
    public function index()
    {
        // Fetch habits for the authenticated user
        $habits = Habit::where('user_id', Auth::id())->get();

        // Debugging: Check if data exists
        if ($habits->isEmpty()) {
            return view('habits.index', ['habits' => collect()]); // Ensure the variable exists
        }

        return view('habits.index', compact('habits'));
    }

public function create()
{
    return view('habits.create'); // Make sure this view exists in resources/views/habits/
}


public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'frequency' => 'required|string|max:255',
    ]);

    Habit::create([
        'name' => $request->name,
        'frequency' => $request->frequency,
        'user_id' => auth()->id(), // 👈 Ensure user_id is set
    ]);

    return redirect()->route('habits.index')->with('success', 'Habit added successfully!');
}




}