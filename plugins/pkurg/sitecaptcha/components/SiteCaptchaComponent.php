<?php namespace Pkurg\SiteCaptcha\Components;

use Cms\Classes\ComponentBase;

class SiteCaptchaComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'SiteCaptcha Component',
            //'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'type' => [
                'title'       => 'Captcha type',
                'type'        => 'dropdown',
                'default'     => 'default',
                'placeholder' => 'Select captcha type',
                'options'     => [
                    'default'=>'default', 
                    'math'=>'math', 
                    'flat'=>'flat', 
                    'mini'=>'mini', 
                    'inverse'=>'inverse', 

                ]
            ],'showrefresh' => [
                'title'       => 'Refresh button',
                'type'        => 'dropdown',
                'default'     => 'show',                
                'options'     => [
                    'show'=>'show', 
                    'hide'=>'hide',                                         
                ]
            ],
            'iconclass' => [
             'title'             => 'Icon class',             
             'default'           => 'icon-refresh',
             'type'              => 'string',                        
        ]

        ];
    }

    public function getImg()
    {
        return \Captcha::src($this->property('type'));
    }

    public function onRun()
    {

       $this->addJs('/plugins/pkurg/sitecaptcha/assets/captcha.js?v=3');

   }

}
