<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KpiType extends Model
{
	// protected $table = '';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'value', 'estimated_time'
    ];
}