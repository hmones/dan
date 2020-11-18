<?php namespace Hmones\Dan\Models;

use \Backend\Models\ExportModel;
use Hmones\Dan\Models\Keyword;

class KeywordExport extends ExportModel
{
    public function exportData($columns, $sessionKey = null)
    {
        $keywords = Keyword::all();
        $keywords->each(function($keyword) use ($columns) {
            $keyword->addVisible($columns);
        });
        return $keywords->toArray();
    }
}