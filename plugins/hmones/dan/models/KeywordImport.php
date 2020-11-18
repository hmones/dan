<?php namespace Hmones\Dan\Models;

use \Backend\Models\ImportModel;
use Hmones\Dan\Models\Keyword;

class KeywordImport extends ImportModel
{
    /**
     * @var array The rules to be applied to the data.
     */
    public $rules = [];

    public function importData($results, $sessionKey = null)
    {
        foreach ($results as $row => $data) {

            try {
                $keyword = new Keyword;
                $keyword->fill($data);
                $keyword->save();

                $this->logCreated();
            }
            catch (\Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }

        }
    }
}