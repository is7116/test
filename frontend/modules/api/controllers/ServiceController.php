<?php

namespace frontend\modules\api\controllers;

use common\models\Service as ServiceModel;
use frontend\modules\api\models\search\Service as ServiceSearch;
use Yii;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\ActiveController;
use yii\rest\IndexAction;

/**
 * Услуги
 */
class ServiceController extends ActiveController
{
    public $modelClass = ServiceModel::class;

    public function checkAccess($action, $model = null, $params = [])
    {
        return !Yii::$app->user->isGuest;
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator']['authMethods'] = [
            HttpBearerAuth::class,
        ];
        return $behaviors;
    }

    public function actions()
    {
        $actions = parent::actions();
        $actions = array_intersect_key($actions, array_flip(['index', 'view']));

        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }

    public function prepareDataProvider(IndexAction $action)
    {
        $searchModel = new ServiceSearch();
        return $searchModel->search(Yii::$app->request->queryParams);
    }
}
