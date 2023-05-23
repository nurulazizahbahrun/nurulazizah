<?php


namespace app\controllers;
use app\models\Profil093;
use yii\data\ActiveDataProvider;

class Profil093Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Profil093::find()
        ]);
        return $this->render('index', [
        'dataProvider' => $dataProvider
    
        ]);

        }
    }
?>
