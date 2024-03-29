<?php

namespace App\Models\Region;

use Illuminate\Database\Eloquent\Model;

class RegionPosition extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ref_region_positions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
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
