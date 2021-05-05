<?php namespace Hmones\Dan\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Hmones\Dan\Models\Keyword;

class ActorsSphere extends ReportWidgetBase
{
    public function render()
    {
        $keywords = Keyword::withCount('actors')->get()->groupBy('sphere');
        return $this->makePartial('widget', ['keywords' => $keywords]);
    }
}