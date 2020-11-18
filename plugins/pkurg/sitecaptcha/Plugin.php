<?php namespace Pkurg\SiteCaptcha;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function registerComponents()
	{
		return [
			'Pkurg\SiteCaptcha\Components\SiteCaptchaComponent' => 'sitecaptcha',
		];

	}

	public function registerSettings()
	{
		

	}

	public function boot()
	{

		\App::register('\Mews\Captcha\CaptchaServiceProvider');

		$alias = \Illuminate\Foundation\AliasLoader::getInstance()->alias('Captcha', 'Mews\Captcha\Facades\Captcha');    	

	}

	
}
