<?php

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use frontend\widgets\LangWidget;
use common\models\Text;
use yii\helpers\Url;
use common\models\Lang;
?>
<header class="header">
    <div class="cr">
        <div class="head">
            <a href="<?= Text::find()->where(['key' => 'fax'])->one()->value_ru; ?>" class="head-phone phone"><?= Text::find()->where(['key' => 'fax'])->one()->value_ru; ?></a>
            <ul class="head-nav_list">
                <li>
                    <a href="/<?= Lang::getCurrent()->url ?>"><?= Yii::t('app', 'Home') ?>  </a>
                </li>
                <li>
                    <a <?php if (stripos($_SERVER['REQUEST_URI'],'article/o-kompanii') !== false) {echo 'class="active"';} ?> href="<?= Url::toRoute(['/article/view', 'slug' => 'o-kompanii']) ?>"><?= Yii::t('app', 'About company') ?></a>
                </li>
                <li>
                    <a <?php if (stripos($_SERVER['REQUEST_URI'],'article/logistika') !== false) {echo 'class="active"';} ?> href="<?= Url::toRoute(['/article/view', 'slug' => 'logistika']) ?>"><?= Yii::t('app', 'Logistic') ?>   </a>
                </li>
                <li>
                    <a href="/<?= Lang::getCurrent()->url ?>" class="head-logo logo"><img src="/img/logo.png" alt=""></a>
                </li>
                <li>
                    <a <?php if (stripos($_SERVER['REQUEST_URI'],'news') !== false) {echo 'class="active"';} ?> href="<?= Url::toRoute(['/news/']) ?>"><?= Yii::t('app', 'News') ?> </a>
                </li>
                <li>
                    <a <?php if (stripos($_SERVER['REQUEST_URI'],'article/park-vagonov') !== false) {echo 'class="active"';} ?> href="<?= Url::toRoute(['/article/view', 'slug' => 'park-vagonov']) ?>"><?= Yii::t('app', 'Park cars') ?>         </a>
                </li>
                <li>
                    <a <?php if (stripos($_SERVER['REQUEST_URI'],'article/dostizenia') !== false) {echo 'class="active"';} ?> href="<?= Url::toRoute(['/article/view', 'slug' => 'dostizenia']) ?>"><?= Yii::t('app', 'Achievements') ?>          </a>
                </li>
                <li>
                    <a <?php if (stripos($_SERVER['REQUEST_URI'],'site/contact') !== false) {echo 'class="active"';} ?> href="<?= Url::toRoute(['/site/contact']) ?>"><?= Yii::t('app', 'Contacts') ?></a>
                </li>
            </ul>

            <div class="mob_start"></div>
            <a href="/<?= Lang::getCurrent()->url ?>" class="head-logo logo-mobile "><img src="/img/logo.png" alt=""></a>
            <?= LangWidget::widget() ?>
        </div>
    </div>
</header>
