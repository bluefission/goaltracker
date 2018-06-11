<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KpiType;

class KpiTypeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        return KpiType::all();
    }

    public function show(KpiType $kpiType)
    {
        return $kpiType;
    }

    public function store(Request $request)
    {
        $kpiType = KpiType::create($request->all());
        
        return response()->json($kpiType, 201);
    }

    public function update(Request $request, KpiType $kpiType)
    {
        $kpiType->update($request->all());

        return response()->json($kpiType, 200);
    }

    public function delete(Request $request, KpiType $kpiType)
    {
        $kpiType->delete();

        return response()->json(null, 204);
    }
}