# yii2-jquery-mobile-widget
```
https://github.com/jquery/jquery-mobile
```

composer.json
-----
```json
"require": {
        "xj/yii2-jquery-mobile-widget": "*"
},
```

In View
------------
```php
xj\jquerymobile\JqueryMobileAsset::register($this);
```

In Assets Depends
-----------
```php
public $depends = [
    'xj\jquerymobile\JqueryMobileAsset',
];
```
