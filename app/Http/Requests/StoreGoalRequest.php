<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGoalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'user_id'=>'required|integer', 
            'parent_id'=>'exists:goals,id|integer', 
            'name'=>'required|string', 
            'description'=>'string', 
            'units'=>'numeric', 
            'budget'=>'numeric', 
            'start'=>'date', 
            'end'=>'date',
        ];
    }
}
