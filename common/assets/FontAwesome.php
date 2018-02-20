<?php

namespace common\assets;

use yii\web\AssetBundle;

class FontAwesome extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome';
    public $css = [
        'web-fonts-with-css/css/fontawesome-all.min.css',
    ];
}
