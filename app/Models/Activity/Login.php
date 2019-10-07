<?php

namespace App\Models\Activity;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'login_activities';

    protected $fillable = [
        'user_id',
        'user_agent',
        'ip_address'
    ];

}
