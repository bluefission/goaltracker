<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Schedule;

class ScheduleController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        return Schedule::all();
    }

    public function show(Schedule $schedule)
    {
        return $schedule;
    }

    public function store(Request $request)
    {
        $schedule = Schedule::create($request->all());
        
        return response()->json($schedule, 201);
    }

    public function update(Request $request, Schedule $schedule)
    {
        $schedule->update($request->all());

        return response()->json($schedule, 200);
    }

    public function delete(Request $request, Schedule $schedule)
    {
        $schedule->delete();

        return response()->json(null, 204);
    }
}