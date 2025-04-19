<?php

namespace app\controllers;

use yii\web\Controller;

class HealthController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return 'OK';
    }
}
