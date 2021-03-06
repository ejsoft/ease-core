<?php

namespace ease\assets;


use ej\web\AssetBundle;

class Jquery extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/jquery/dist';
    /**
     * @var array
     */
    public $js = [
        YII_DEBUG ? 'jquery.js' : 'jquery.min.js',
    ];
}