<?php

namespace xj\jquerymobile;

use yii\web\AssetBundle;

class IconSvgAsset extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-jquery-mobile-widget/assets';
    public $basePath = '@webroot/assets';
    public $css = ['jquery.mobile.inline-svg.css'];
    public $depends = [
        'xj\jquerymobile\StructureAsset',
    ];

}
