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
//Default
xj\jquerymobile\ScriptAsset::register($this);
xj\jquerymobile\ThemeFullAsset::register($this);

//Part
xj\jquerymobile\ScriptAsset::register($this);
xj\jquerymobile\StructureAsset::register($this); //jquery.structure
xj\jquerymobile\ThemeAsset::register($this); //Default Theme
xj\jquerymobile\IconPngAsset::register($this); //Icon

//Icon
xj\jquerymobile\IconPngAsset::register($this);
xj\jquerymobile\IconPngExtAsset::register($this);
xj\jquerymobile\IconSvgAsset::register($this);
```
