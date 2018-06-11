<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGoalRequest;
use App\Goal;

/**
 * @resource Goals
 *
 * Longer description
 */
class GoalController extends Controller
{
    private $user;

    public function __construct()
    {
        // $this->middleware('auth');
        $this->user = Auth::user();
    }
    
    /**
     * List all goals
     *
     *  
     * @response [{'user_id':2, 'parent_id':1, 'name':'Lose Weight', 'description':null, 'units':100, 'budget':null, 'start':'2012-06-01 12:00:00', 'end':'2018-12-01 12:00:00'}]
     * 
     */
    public function index(Request $request)
    {
        return Goal::where('user_id',$this->user->id)->whereNull('parent_id')->all();
    }

    /**
     * Get a goal
     * 
     *
     * @response {
     *  data: ['user_id', 'parent_id', 'name', 'description', 'units', 'budget', 'start', 'end'],
     *}
     */
    public function show(Goal $goal)
    {
        if ( $goal->user_id == $this->user->id)
            return $goal;
        else
            return new Goal();
    }

    /**
     * Store a goal
     * 
     * @response {
     *  data: ['user_id', 'parent_id', 'name', 'description', 'units', 'budget', 'start', 'end'],
     *}
     */
    public function store(StoreGoalRequest $request)
    {
        $goal = Goal::create($request->all());
        
        return response()->json($goal, 201);
    }

    /**
     * Update a goal
     * 
     * @response {
     *  data: ['user_id', 'parent_id', 'name', 'description', 'units', 'budget', 'start', 'end'],
     *}
     */
    public function update(Request $request, Goal $goal)
    {
        $goal->update($request->all());

        return response()->json($goal, 200);
    }
    
    /**
     * Delete a goal
     * 
     * @response {
     *  id: 12,
     *}
     */
    public function delete(Request $request, Goal $goal)
    {
        $goal->delete();

        return response()->json(null, 204);
    }
}