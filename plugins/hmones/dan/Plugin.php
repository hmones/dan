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

    public function registerReportWidgets()
    {
        return [
            'Hmones\Dan\ReportWidgets\ActorsKeyword' => [
                'label'   => 'Actors by Keyword',
                'context' => 'dashboard',
                'permissions' => [
                    'hmones.dan.widgets.actors_keyword',
                ],
            ],
            'Hmones\Dan\ReportWidgets\ActorsGender' => [
                'label'   => 'Actors by Gender',
                'context' => 'dashboard',
                'permissions' => [
                    'hmones.dan.widgets.actors_gender',
                ],
            ],
            'Hmones\Dan\ReportWidgets\ActorsCountry' => [
                'label'   => 'Actors by Country',
                'context' => 'dashboard',
                'permissions' => [
                    'hmones.dan.widgets.actors_country',
                ],
            ]
         ];
    }

    public function registerPermissions()
{
    return [
        'hmones.dan.widgets.actors_country' => [
            'label' => 'View the actors country widget',
            'tab' => 'Widgets',
            'order' => 1,
            'roles' => ['publisher']
        ],
        'hmones.dan.widgets.actors_keyword' => [
            'label' => 'View the actors keyword widget',
            'tab' => 'Widgets',
            'order' => 2,
            'roles' => ['publisher']
        ],
        'hmones.dan.widgets.actors_gender' => [
            'label' => 'View the actors gender widget',
            'tab' => 'Widgets',
            'order' => 3,
            'roles' => ['publisher']
        ]
    ];
}
}
