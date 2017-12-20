<?php

namespace backend\controllers;

use Yii;
use app\models\Buku;
use app\models\BukuSearach;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BukuController implements the CRUD actions for Buku model.
 */
class AdminController extends Controller
{
    /**
     * @inheritdoc
     */

    /**
     * Lists all Buku models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}