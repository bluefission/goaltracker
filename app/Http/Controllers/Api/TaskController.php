<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

class TaskController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        return Task::all();
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());
        
        return response()->json($task, 201);
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return response()->json($task, 200);
    }

    public function delete(Request $request, Task $task)
    {
        $task->delete();

        return response()->json(null, 204);
    }
}