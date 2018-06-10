<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
	// protected $table = '';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'goal_id', 'kpi_type_id', 'note', 'quantity', 'cost', 'start', 'duration'
    ];
}