<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class UrbanVillage extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'ref_urban_villages';

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'code', 'name', 'description', 'subdistrict_id'
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
