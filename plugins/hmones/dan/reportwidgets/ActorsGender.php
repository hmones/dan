<?php namespace Hmones\Dan\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Hmones\Dan\Models\Actor;
use Illuminate\Support\Facades\DB;

class ActorsGender extends ReportWidgetBase
{
    public function render()
    {
        $actors = Actor::select('gender',DB::raw('COUNT(gender) as count'))->groupBy('gender')->get()->toArray();
        return $this->makePartial('widget', ['actors' => $actors]);
    }
}