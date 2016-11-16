<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use common\models\Text;
use common\models\Lang;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = Yii::t('app', 'Contacts');

?>

<div class="container">
    <div class="cr">
        <div class="content">
            <div class="contact">
                <div class="index-contact">
                    <div class="index-contact__des">
                        <div class="index-contact__title">
                            <?= Yii::t('app', 'Contacts') ?>
                        </div>
                        <div class="index-contact_item">
                            <div class="index-contact_item_form">
                                <?php $form = ActiveForm::begin(['id' => 'contact-form', 'layout' => 'horizontal']); ?>
                                <div class="contact-form-input__container">
                                    <?= $form->field($model, 'name', ['inputOptions' => ['class' => 'contact-form-input']])->textInput()->input('name', ['placeholder' => Yii::t('app', 'Your name')])->label(false); ?>
                                </div>
                                <div class="contact-form-input__container">
                                    <?= $form->field($model, 'email', ['inputOptions' => ['class' => 'contact-form-input']])->textInput()->input('name', ['placeholder' => Yii::t('app', 'Your e-mail')])->label(false); ?>
                                </div>
                                <div class="contact-form-input__container">
                                    <?= $form->field($model, 'body',['inputOptions' => ['class' => 'contact-form-textarea', 'placeholder' => Yii::t('app', 'Your text'),],])->textarea(['cols' => 10, 'rows' => 5])->label(false) ?>
                                </div>
                                <?= Html::submitButton(Yii::t('app', 'Send letter'), ['class' => 'contat-form-button', 'name' => 'contact-button']) ?>
                               
                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                        <div class="index-contact_item index-contact_item-right">
                            <p>
                                <?php if(Lang::getCurrent()->id == 1) { ?>
                                    <?= Text::find()->where(['key' => 'address'])->one()->value_en; ?>
                                <?php } elseif(Lang::getCurrent()->id == 2) { ?>
                                    <?= Text::find()->where(['key' => 'address'])->one()->value_ru; ?>
                                <?php } elseif(Lang::getCurrent()->id == 3) { ?>
                                    <?= Text::find()->where(['key' => 'address'])->one()->value_kz; ?>
                                <?php } ?>
                            </p>
                            <div class="index-contact_item_title">
                                <?= Yii::t('app', 'Contact Us') ?>
                            </div>
                            <div class="index-contact-phone">
                                <a href="tel:<?= Text::find()->where(['key' => 'fax'])->one()->value_ru; ?>  " class="index-contact-phone_item"><?= Text::find()->where(['key' => 'fax'])->one()->value_ru; ?>  </a>
                                <a href="tel:<?= Text::find()->where(['key' => 'phone'])->one()->value_ru; ?>  " class="index-contact-phone_item"><?= Text::find()->where(['key' => 'phone'])->one()->value_ru; ?>  </a>
                                <p>
                                    <?php if(Lang::getCurrent()->id == 1) { ?>
                                        <?= Text::find()->where(['key' => 'work-time'])->one()->value_en; ?>
                                    <?php } elseif(Lang::getCurrent()->id == 2) { ?>
                                        <?= Text::find()->where(['key' => 'work-time'])->one()->value_ru; ?>
                                    <?php } elseif(Lang::getCurrent()->id == 3) { ?>
                                        <?= Text::find()->where(['key' => 'work-time'])->one()->value_kz; ?>
                                    <?php } ?>
                                </p>
                            </div>
                            <ul class="soc-seti">
                                <li><a href="" class="in-soc" target="_blank"><img src="/img/in.png" alt=""></a></li>
                                <li><a href="" class="fb-soc" target="_blank"><img src="/img/fb.png" alt=""></a></li>
                                <li><a href="" class="twit-soc" target="_blank"><img src="/img/twit.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="map-container-contact">
            <div class="maps-contact">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=1YQN5sYpcd_vgol7XTAu5d54UHDRI27R&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true">
                </script>
            </div>
        </div>
    </div>
</div>

