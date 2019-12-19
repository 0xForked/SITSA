<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;

class ServicePeriod extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'service_period';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from', 'to', 'status'
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
