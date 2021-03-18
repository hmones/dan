<?php namespace Hmones\Dan\Models;

use Model;
use October\Rain\Database\Traits\Validation;

class Connection extends Model
{
    use Validation;

    public $table = 'hmones_dan_connections';

    public $rules = [
    ];

    public $belongsToMany = [
        'keywords' => ['Hmones\Dan\Models\Keyword', 'table' => 'hmones_dan_connection_keyword']
    ];

    public $attachOne = [
        'picture' => 'System\Models\File',
        'portfolio' => 'System\Models\File',
        'cv' => 'System\Models\File'
    ];

    public function getKeywordsListAttribute()
    {
        return optional($this->keywords())->pluck('slug');
    }

    public function getKeywordsStringAttribute()
    {
        $keywords = optional($this->keywords_list)->toArray();
        return $keywords ? $keywords : "No Keywords";
    }

    public function scopeType($query, $value)
    {
        return $query->where('type', $value);
    }
}
