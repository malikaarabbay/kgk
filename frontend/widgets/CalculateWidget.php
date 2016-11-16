<?php

namespace frontend\widgets;

use common\models\Order;
use yii\base\Widget;
use Yii;

class CalculateWidget extends Widget
{

    public function init()
    {
        parent::init();

        $model = new Order();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Спасибо. Ваша заявка успешно отправлено.');
            } else {
                Yii::$app->session->setFlash('error', 'Произошла ошибка.');
            }
            echo $this->render('calculate', [
                'model' => $model,
            ]);
        } else {
            echo $this->render('calculate', [
                'model' => $model,
            ]);
        }
//        echo $this->render('calculate');

    }

}
