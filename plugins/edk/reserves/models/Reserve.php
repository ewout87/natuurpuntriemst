<?php namespace Edk\Reserves\Models;

use Model;
use Edk\Reserves\Models\Species;

/**
 * Model
 */
class Reserve extends Model
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
    public $table = 'edk_reserves_reserve';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'species' => 'System\Models\File'
    ];

    public $attachOne = [
        'featured_image' => 'System\Models\File',
        'trail_map' => 'System\Models\File'
    ];
}
