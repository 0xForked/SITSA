<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scope extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'description',
    ];
}
