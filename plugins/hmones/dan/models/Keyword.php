<?php namespace Hmones\Dan\Models;

use Model;

/**
 * Model
 */
class Keyword extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $guarded = [];
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'hmones_dan_keywords';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'actors' => [
            'Hmones\Dan\Models\Actor',
            'table' => 'hmones_dan_actor_keyword'
        ]
    ];
}
