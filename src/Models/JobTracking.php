<?php

namespace Seat\Eveapi\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class JobTracking
 * @package Seat\Eveapi\Models
 */
class JobTracking extends Model
{

    /**
     * @var string
     */
    protected $primaryKey = 'job_id';

    /**
     * @var array
     */
    protected $fillable = ['job_id', 'owner_id', 'api', 'scope', 'status'];
}
