<?php namespace Hmones\Dan\Models;

use Model;

/**
 * Model
 */
class Actor extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hmones_dan_actors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'keywords' => ['Hmones\Dan\Models\Keyword','table'=>'hmones_dan_actor_keyword']
    ];

    public function getKeywordsListAttribute()
    {
        return optional($this->keywords())->pluck('slug');
    }

    public function getKeywordsStringAttribute()
    {
        $keywords = optional($this->keywords_list)->toArray();
        return $keywords ? $keywords:"No Keywords";
    }

    public function scopeType($query, $value)
    {   
        return $query->where('type',$value);
    }


}
