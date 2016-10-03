<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $casts = [
        'id' => 'string',
    ];
}
