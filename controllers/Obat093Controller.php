<?php

namespace app\controllers;
use app\models\Obat093;
use yii\data\ActiveDataProvider;

class Obat093Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Obat093::find()
        ]);
        return $this->render('index', [
        'dataProvider' => $dataProvider
    
        ]);
    }

}
