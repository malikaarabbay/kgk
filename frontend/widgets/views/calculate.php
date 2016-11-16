<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div id="modal1" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
    <span class="modal_close"></span>
    <div class="modal-title"><?= Yii::t('app', 'Calculate the cost') ?></div>

    <?php $form = ActiveForm::begin(['id' => 'contact-form', 'layout' => 'horizontal']); ?>
        <div class="rasschitat-stoimost-modal">
            <div class="rasschitat-input__container ">
                <label for=""><?= Yii::t('app', 'client')?></label>
                <?= $form->field($model, 'company_name', ['inputOptions' => ['class' => 'rasschitat-input']])->textInput()->input('company_name', ['placeholder' => Yii::t('app', 'name of company')])->label(false); ?>
            </div>
            <div class="rasschitat-input__container ">
                <label for=""><?= Yii::t('app', 'contacts')?></label>
                <?= $form->field($model, 'phone', ['inputOptions' => ['class' => 'rasschitat-input']])->textInput()->input('phone', ['placeholder' => Yii::t('app', 'your mobile')])->label(false); ?>
            </div>
            <div class="rasschitat-input__container ">
                <label for=""><?= Yii::t('app', 'e-mail')?></label>
                <?= $form->field($model, 'email', ['inputOptions' => ['class' => 'rasschitat-input']])->textInput()->input('email', ['placeholder' => Yii::t('app', 'e-mail')])->label(false); ?>
            </div>
            <div class="rasschitat-input__container ">
                <label for=""><?= Yii::t('app', 'the composition of the genus')?></label>
                <?= $form->field($model, 'container', ['inputOptions' => ['class' => 'rasschitat-input']])->textInput()->input('container', ['placeholder' => Yii::t('app', 'container/railway carriage')])->label(false); ?>
            </div>
            <div class="rasschitat-input__container ">
                <label for=""><?= Yii::t('app', 'station and the departure road')?></label>
                <?= $form->field($model, 'st_departure', ['inputOptions' => ['class' => 'rasschitat-input']])->textInput()->input('st_departure', ['placeholder' => Yii::t('app', 'full name, code')])->label(false); ?>
            </div>
            <div class="rasschitat-input__container ">
                <label for=""><?= Yii::t('app', 'station and arrival road')?></label>
                <?= $form->field($model, 'st_arrival', ['inputOptions' => ['class' => 'rasschitat-input']])->textInput()->input('st_arrival', ['placeholder' => Yii::t('app', 'full name, code')])->label(false); ?>
            </div>
            <div class="rasschitat-input__container ">
                <label for=""><?= Yii::t('app', 'shipping code')?></label>
                <?= $form->field($model, 'code', ['inputOptions' => ['class' => 'rasschitat-input']])->textInput()->input('code', ['placeholder' => Yii::t('app', 'GNG / ETSNG')])->label(false); ?>
            </div>
            <div class="rasschitat-input__container ">
                <label for=""><?= Yii::t('app', 'name of cargo')?></label>
                <?= $form->field($model, 'bag', ['inputOptions' => ['class' => 'rasschitat-input']])->textInput()->input('bag', ['placeholder' => Yii::t('app', 'full name')])->label(false); ?>
            </div>
            <div class="rasschitat-input__container ">
                <label for=""><?= Yii::t('app', 'consignor')?></label>
                <?= $form->field($model, 'bg_departure', ['inputOptions' => ['class' => 'rasschitat-input']])->textInput()->input('bg_departure', ['placeholder' => Yii::t('app', 'full name')])->label(false); ?>
            </div>
            <div class="rasschitat-input__container ">
                <label for=""><?= Yii::t('app', 'consignee')?></label>
                <?= $form->field($model, 'bg_arrival', ['inputOptions' => ['class' => 'rasschitat-input']])->textInput()->input('bg_arrival', ['placeholder' => Yii::t('app', 'full name')])->label(false); ?>
            </div>
        </div>
        <div class="rasschitat-button-container">
            <?= Html::submitButton(Yii::t('app', 'Calculate the cost'), ['class' => 'rasschitat-button', 'name' => 'contact-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
<div id="overlay"></div>