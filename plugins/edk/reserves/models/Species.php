<?php namespace Edk\Reserves\Models;

use Model;
use Edk\Reserves\Models\Reserves;

/**
 * Model
 */
class Species extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'edk_reserves_species';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'portrait' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'reserves' => ['Edk\Reserves\Models\Reserves',
            'table' => 'edk_reserves_reserve_species',
            'order' => 'published_at desc',
        ],
    ];
}
