<?php

namespace xj\jquerymobile;

use yii\web\AssetBundle;

class IconPngExtAsset extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-jquery-mobile-widget/assets';
    public $basePath = '@webroot/assets';
    public $css = ['jquery.mobile.external-png.css'];
    public $depends = [
        'xj\jquerymobile\StructureAsset',
    ];

}
