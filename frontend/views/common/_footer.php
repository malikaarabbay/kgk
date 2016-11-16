<?php
use common\models\Lang;
use frontend\widgets\CalculateWidget;
?>
<footer>
    <div class="cr">
        <div class="footer">
            <ul class="footer-nav">
                <li><a href="/<?= Lang::getCurrent()->url ?>"><?= Yii::t('app', 'Home') ?>  </a></li>
                <li><a href=""><?= Yii::t('app', 'About company') ?> </a></li>
                <li><a href=""><?= Yii::t('app', 'Logistic') ?></a></li>
                <li><a href=""><?= Yii::t('app', 'News') ?></a></li>
                <li><a href=""><?= Yii::t('app', 'Park cars') ?></a></li>
                <li><a href=""><?= Yii::t('app', 'Achievements') ?></a></li>
                <li><a href=""><?= Yii::t('app', 'Contacts') ?></a></li>
            </ul>
            <a href="http://astanacreative.kz/" class="developed">
                <?= Yii::t('app', 'Developed by') ?> AstanaCreative <img src="/img/logo-ast.png" alt="">
            </a>
        </div>
    </div>
</footer>
<?= CalculateWidget::widget();?>