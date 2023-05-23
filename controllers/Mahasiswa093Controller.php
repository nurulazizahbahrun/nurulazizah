<?php

namespace app\controllers;
use app\models\Mahasiswa093;
use yii\data\ActiveDataProvider;

class Mahasiswa093Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa093::find()
        ]);
        return $this->render('index', [
        'dataProvider' => $dataProvider
    
        ]);
    
    }

}
?>
