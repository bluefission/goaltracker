<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quantifier;

class QuantifierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        return Quantifier::all();
    }

    public function show(Quantifier $quantifier)
    {
        return $quantifier;
    }

    public function store(Request $request)
    {
        $quantifier = Quantifier::create($request->all());
        
        return response()->json($quantifier, 201);
    }

    public function list(Request $request)
    {
        $quantifier = Quantifier::create($request->all());

        return response()->json($quantifier, 201);
    }

    public function update(Request $request, Quantifier $quantifier)
    {
        $quantifier->update($request->all());

        return response()->json($quantifier, 200);
    }

    public function delete(Request $request, Quantifier $quantifier)
    {
        $quantifier->delete();

        return response()->json(null, 204);
    }
}