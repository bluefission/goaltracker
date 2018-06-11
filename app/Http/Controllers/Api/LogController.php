<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Log;

class LogController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        return Log::all();
    }

    public function show(Log $log)
    {
        return $log;
    }

    public function store(Request $request)
    {
        $log = Log::create($request->all());
        
        return response()->json($log, 201);
    }

    public function update(Request $request, Log $log)
    {
        $log->update($request->all());

        return response()->json($log, 200);
    }

    public function delete(Request $request, Log $log)
    {
        $log->delete();

        return response()->json(null, 204);
    }
}