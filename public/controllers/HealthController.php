<?php

namespace app\controllers;

use yii\web\Controller;

class HealthController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     * @throws \JsonException
     */
    public function actionIndex()
    {
        return json_encode(['status' => 'OK'], JSON_THROW_ON_ERROR);
    }
}
