<?php

namespace Seat\Eveapi\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EveRefTypes
 * @package Seat\Eveapi\Models
 */
class EveRefTypes extends Model
{

    /**
     * @var string
     */
    protected $primaryKey = 'refTypeID';

    /**
     * @var array
     */
    protected $fillable = ['refTypeID', 'refTypeName'];
}
