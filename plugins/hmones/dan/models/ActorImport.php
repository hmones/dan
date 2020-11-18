<?php namespace Hmones\Dan\Models;

use \Backend\Models\ImportModel;
use Hmones\Dan\Models\{Actor, Keyword};

class ActorImport extends ImportModel
{
    /**
     * @var array The rules to be applied to the data.
     */
    public $rules = [];

    public function importData($results, $sessionKey = null)
    {
        foreach ($results as $row => $data) {
            
            try {
                $keywords = explode(';', $data['keywords']);
                unset($data['keywords']);
                $actor = Actor::create($data);
                if(!empty($keywords)){
                    $keywords = Keyword::whereIn('slug',$keywords)->orWhereIn('id',$keywords)->pluck('id');
                    $actor->keywords()->attach($keywords);
                }
                $this->logCreated();
            }
            catch (\Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }

        }
    }
}