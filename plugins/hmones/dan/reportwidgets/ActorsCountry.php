<?php namespace Hmones\Dan\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Hmones\Dan\Models\Actor;
use Illuminate\Support\Facades\DB;

class ActorsCountry extends ReportWidgetBase
{
    public function render()
    {
        $countries = Actor::select('country', DB::raw('COUNT(country) as count'))->groupBy('country')->get()->toArray();
        return $this->makePartial('widget', ['countries' => $countries]);
    }
}