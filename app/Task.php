<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	// protected $table = '';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task_id', 'start', 'end', 'interval', 'total', 'quantifier_id'
    ];
}