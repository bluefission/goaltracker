<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
	// protected $table = '';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'parent_id', 'name', 'description', 'units', 'budget', 'start', 'end'
    ];
}