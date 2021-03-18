<?php namespace Hmones\Dan\Models;

use Model;
use October\Rain\Database\Traits\SoftDelete;
use October\Rain\Database\Traits\Validation;

class Keyword extends Model
{
    use Validation;

    use SoftDelete;

    public $table = 'hmones_dan_keywords';

    public $rules = [
    ];

    public $belongsToMany = [
        'actors' => [
            'Hmones\Dan\Models\Actor',
            'table' => 'hmones_dan_actor_keyword'
        ],
        'connections' => [
            'Hmones\Dan\Models\Connection',
            'table' => 'hmones_dan_connection_keyword'
        ]
    ];

    protected $dates = ['deleted_at'];

    protected $guarded = [];
}
