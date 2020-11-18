<?php namespace Hmones\Dan\Components;

use Cms\Classes\ComponentBase;
use Hmones\Dan\Models\Keyword;
use Hmones\Dan\Models\Actor;
use Illuminate\Support\Facades\Session;
use October\Rain\Support\Facades\Flash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class FormSubmit extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'FormSubmit Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['keywords'] = Keyword::all();
    }

    public function onSubmit()
    {
        $data = request()->all();
        $rules = [
            'actor.type' => 'required',
            'actor.country' => 'required',
            'actor.city' => 'required|string|max:255',
            'actor.origin_country' => 'nullable',
            'actor.title' => 'required',
            'actor.name' => 'required|string|max:255',
            'actor.slug' => 'required|string|max:255',
            'actor.gender' => 'required|in:male,female,other',
            'actor.email' => 'nullable|email',
            'actor.phone' => 'nullable|numeric',
            'actor.linkedin' => 'nullable|url',
            'actor.website' => 'nullable|url',
            'actor.description' => 'nullable|string|max:2000',
            'actor.technology' => 'nullable',
            'keywords' => 'nullable',
            'captcha' => 'required|captcha_api:' . Session::get('captcha.key')
        ];
        $messages = [
            'actor.type.required' => 'Registration type is required',
            'actor.country.required' => 'Country field is required',
            'actor.city.required' => 'City field is required',
            'actor.title.required' => 'Title field is required',
            'actor.name.required' => 'Name field is required',
            'actor.gender.required' => 'Gender field is required',
            'actor.email.email' => 'Email is invalid',
            'actor.phone.numeric' => 'Phone number must be all numbers',
            'actor.linkedin.url' => 'Linkedin field is not a valid link',
            'actor.website.url' => 'Website field is not a valid link',
            'actor.description.max' => 'Description field can not exceed 2000 charachters',
            'captcha.required' => 'Wrong Captcha'
        ];
        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            return Redirect::to('/')->withErrors($validator);
        } else {
            $actor = Actor::create($data['actor']);
            if($data['keywords'] != null){
                $keywords = explode(',', $data['keywords']);
                $actor->keywords()->attach($keywords);
            }
            Flash::success('Success');
            return redirect('/thanks');
        }   
    }
}
