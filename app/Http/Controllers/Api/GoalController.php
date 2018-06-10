<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Goal;

class GoalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        return Goal::all();
    }

    public function show(Goal $goal)
    {
        return $goal;
    }

    public function store(Request $request)
    {
        $goal = Goal::create($request->all());
        
        return response()->json($goal, 201);
    }

    public function list(Request $request)
    {
        $goal = Goal::create($request->all());

        return response()->json($goal, 201);
    }

    public function update(Request $request, Goal $goal)
    {
        $goal->update($request->all());

        return response()->json($goal, 200);
    }

    public function delete(Request $request, Goal $goal)
    {
        $goal->delete();

        return response()->json(null, 204);
    }
}