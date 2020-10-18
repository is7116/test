<?php

namespace frontend\modules\api\assets;

use yii\web\AssetBundle;

class OpenapiAsset extends AssetBundle
{
    public $sourcePath = '@frontend/modules/api/web';
    public $css = [];
    public $js = [
        'openapi.js',
    ];
    public $depends = [
        SwaggerAsset::class,
    ];

    public function getYmlUrl()
    {
        return $this->baseUrl.'/openapi.yml';
    }
}