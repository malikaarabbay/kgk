<?php

namespace frontend\widgets;

use common\models\Article;
use yii\base\Widget;

class GlobeWidget extends Widget
{

    public function init()
    {
        parent::init();

        $globeArticle = Article::find()->where(['is_published' => 1, 'id' => 1])->one();

        echo $this->render('globe', [
            'globeArticle' => $globeArticle,
        ]);

    }

}
