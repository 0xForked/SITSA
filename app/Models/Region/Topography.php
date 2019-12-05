<?php

namespace App\Models\Region;

use Illuminate\Database\Eloquent\Model;

class Topography extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ref_topographies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
