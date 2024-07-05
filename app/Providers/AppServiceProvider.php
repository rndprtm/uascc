<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Rules\Char;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('float', function ($attribute, $value, $parameters, $validator) {
            return is_float($value) || (is_numeric($value) && (float)$value == $value);
        });

        Validator::replacer('float', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, ':attribute harus berupa angka desimal.');
        });

    }

    public function register()
    {
        // 
    }
}

