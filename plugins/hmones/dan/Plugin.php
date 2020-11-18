<?php namespace Hmones\Dan;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Hmones\Dan\Components\FormSubmit' => 'FormSubmit'
        ];
    }

    public function registerSettings()
    {
    }
}
