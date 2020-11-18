<?php namespace Hmones\Dan\Models;

use \Backend\Models\ExportModel;
use Hmones\Dan\Models\Actor;

class ActorExport extends ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $actors = Actor::with('keywords:slug')->get();
        $actors->each(function($actor) use ($columns) {
            $actor->addVisible($columns);
        });
        $result = $actors->toArray();
        foreach ($result as $key => $actor) {
            $string = "";
            foreach ($actor['keywords'] as $index => $keyword) {
                if(isset($keyword['slug'])){
                    if($string == ""){
                        $string = $keyword['slug'];
                    }else{
                        $string = $string . ';' . $keyword['slug'];
                    } 
                } 
            }
            $result[$key]['keywords'] = $string;
        }
        return $result;
    }
}