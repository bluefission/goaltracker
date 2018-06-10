<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quantifier extends Model
{
	// protected $table = '';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];
}