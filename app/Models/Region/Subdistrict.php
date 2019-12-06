<?php

namespace App\Models\Region;

use Illuminate\Database\Eloquent\Model;

class Subdistrict extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ref_subdistricts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name', 'description', 'district_id'
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

    public function district()
    {
        return $this->belongsTo('App\Models\Region\District');
    }

    public function urbanVillage()
    {
        return $this->hasMany('App\Models\Region\UrbanVillage');
    }

}
