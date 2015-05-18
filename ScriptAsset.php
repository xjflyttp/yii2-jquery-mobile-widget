<?php

namespace xj\jquerymobile;

use yii\web\AssetBundle;

class ScriptAsset extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-jquery-mobile-widget/assets';
    public $basePath = '@webroot/assets';
    public $js = ['jquery.mobile.js'];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
