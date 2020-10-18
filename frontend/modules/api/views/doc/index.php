<?php

use frontend\modules\api\assets\OpenapiAsset;

/* @var $this \yii\web\View */
/* @var $url string */

/** @var OpenapiAsset $asset */
$asset = $this->registerAssetBundle(OpenapiAsset::class);
?>

<div id="swagger-ui" data-url="<?= $asset->getYmlUrl() ?>"></div>