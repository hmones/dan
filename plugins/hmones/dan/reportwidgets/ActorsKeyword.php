<?php namespace Hmones\Dan\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Hmones\Dan\Models\Keyword;

class ActorsKeyword extends ReportWidgetBase
{
    public function render()
    {
        $keywords = Keyword::all();
        return $this->makePartial('widget', ['keywords' => $keywords]);
    }
}