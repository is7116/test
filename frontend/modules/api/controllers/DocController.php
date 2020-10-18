<?php

namespace frontend\modules\api\controllers;

use yii\web\Controller;

/**
 * Документация
 */
class DocController extends Controller
{
    public function actionIndex()
    {
        $this->layout = '/empty';
        return $this->render('index');
    }
}
