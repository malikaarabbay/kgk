<?php
/* @var $this yii\web\View */
$this->title = 'Логистика';
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Text;
use common\models\Lang;
use himiklab\thumbnail\EasyThumbnailImage;
use yii\bootstrap\ActiveForm;
use frontend\widgets\CalculateWidget;
?>

<div class="cr">
    <div class="content">
        <div class="slider-text-block">
                <div class="text-block">
            <?php if(Lang::getCurrent()->id == 1 && $profit->title_en) { ?>
                    <div class="text-block__title">
                        <?= $profit->title_en ?>
                    </div>
                    <p><?php $anounce = strip_tags($profit->description_en, '<a>'); echo mb_substr($anounce,0, 450, 'UTF-8').' ...'; ?></p>
            <?php } elseif(Lang::getCurrent()->id == 2 && $profit->title_ru) { ?>
                    <div class="text-block__title">
                        <?= $profit->title_ru ?>
                    </div>
                    <p><?php $anounce = strip_tags($profit->description_ru, '<a>'); echo mb_substr($anounce,0, 450, 'UTF-8').' ...'; ?></p>
            <?php } elseif(Lang::getCurrent()->id == 3 && $profit->title_kz) { ?>
                    <div class="text-block__title">
                        <?= $profit->title_kz ?>
                    </div>
                    <p><?php $anounce = strip_tags($profit->description_kz, '<a>'); echo mb_substr($anounce,0, 450, 'UTF-8').' ...'; ?></p>
            <?php } ?>
                    <a href="<?= Url::toRoute(['/article/']) ?>" class="  text-block__button">
                        <?= Yii::t('app', 'Our achievements') ?>
                    </a>
                </div>
            <div class="slider-about">
                <div class="news-slider" >
                    <?php foreach ($newsList as $news) { ?>
                    <div class="slider__item">
                        <?php if(Lang::getCurrent()->id == 1 && $news->title_en) { ?>
                        <div class="slider_item_img">
                            <?=
                            EasyThumbnailImage::thumbnailImg(
                                $news->imagePath,
                                303,
                                254,
                                EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                                [
                                    'alt' => '',
                                    'class' => ''
                                ]
                            );
                            ?>
                        </div>

                        <div class="slider-item__content">
                            <a href="<?= Url::toRoute(['/news/view', 'slug' => $news->slug]) ?>" class="slider-title">
                                <?php $shortTitle = strip_tags($news->title_en, '<a>'); echo mb_substr($shortTitle,0, 100, 'UTF-8').' ...'; ?>
                            </a>
                            <p>
                                <?php $anounce = strip_tags($news->description_en, '<a>'); echo mb_substr($anounce,0, 200, 'UTF-8').' ...'; ?>
                            </p>
                        </div>
                        <?php } elseif(Lang::getCurrent()->id == 2 && $news->title_ru) { ?>
                        <div class="slider_item_img">
                            <?=
                            EasyThumbnailImage::thumbnailImg(
                                $news->imagePath,
                                303,
                                254,
                                EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                                [
                                    'alt' => '',
                                    'class' => ''
                                ]
                            );
                            ?>
                        </div>
                        <div class="slider-item__content">
                            <a href="<?= Url::toRoute(['/news/view', 'slug' => $news->slug]) ?>" class="slider-title">
                                <?php $shortTitle = strip_tags($news->title_ru, '<a>'); echo mb_substr($shortTitle,0, 100, 'UTF-8').' ...'; ?>
                            </a>
                            <p>
                                <?php $anounce = strip_tags($news->description_ru, '<a>'); echo mb_substr($anounce,0, 200, 'UTF-8').' ...'; ?>
                            </p>
                        </div>
                        <?php } elseif(Lang::getCurrent()->id == 3 && $news->title_kz) { ?>
                        <div class="slider_item_img">
                            <?=
                            EasyThumbnailImage::thumbnailImg(
                                $news->imagePath,
                                303,
                                254,
                                EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                                [
                                    'alt' => '',
                                    'class' => ''
                                ]
                            );
                            ?>
                        </div>
                        <div class="slider-item__content">
                            <a href="<?= Url::toRoute(['/news/view', 'slug' => $news->slug]) ?>" class="slider-title">
                                <?php $shortTitle = strip_tags($news->title_kz, '<a>'); echo mb_substr($shortTitle,0, 100, 'UTF-8').' ...'; ?>
                            </a>
                            <p>
                                <?php $anounce = strip_tags($news->description_kz, '<a>'); echo mb_substr($anounce,0, 200, 'UTF-8').' ...'; ?>
                            </p>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="provider">
            <div class="provider-text">
                <?php if(Lang::getCurrent()->id == 1 && $provider->title_en) { ?>
                <div class="provider-text__img">
                    <?=
                    EasyThumbnailImage::thumbnailImg(
                        $provider->imagePath,
                        170,
                        193,
                        EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                        [
                            'alt' => '',
                            'class' => ''
                        ]
                    );
                    ?>
                </div>
                    <div class="provider-text__content">
                        <div class="provider-title">
                            <?= $provider->title_en?>
                        </div>
                        <div class="provider-date">
                            <?= Yii::$app->formatter->asDate($provider->created, 'dd MMMM yyyy') ?>
                        </div>
                        <p><?php $anounce = strip_tags($provider->description_en, '<a>'); echo mb_substr($anounce,0, 200, 'UTF-8').' ...'; ?></p>
                    </div>
                <?php } elseif(Lang::getCurrent()->id == 2 && $provider->title_ru) { ?>
                    <div class="provider-text__img">
                        <?=
                        EasyThumbnailImage::thumbnailImg(
                            $provider->imagePath,
                            170,
                            193,
                            EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                            [
                                'alt' => '',
                                'class' => ''
                            ]
                        );
                        ?>
                    </div>
                    <div class="provider-text__content">
                        <div class="provider-title">
                            <?= $provider->title_ru?>
                        </div>
                        <div class="provider-date">
                            <?= Yii::$app->formatter->asDate($provider->created, 'dd MMMM yyyy') ?>
                        </div>
                        <p><?php $anounce = strip_tags($provider->description_ru, '<a>'); echo mb_substr($anounce,0, 300, 'UTF-8').' ...'; ?></p>
                    </div>
                <?php } elseif(Lang::getCurrent()->id == 3 && $provider->title_kz) { ?>
                    <div class="provider-text__img">
                        <?=
                        EasyThumbnailImage::thumbnailImg(
                            $provider->imagePath,
                            170,
                            193,
                            EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                            [
                                'alt' => '',
                                'class' => ''
                            ]
                        );
                        ?>
                    </div>
                    <div class="provider-text__content">
                        <div class="provider-title">
                            <?= $provider->title_kz?>
                        </div>
                        <div class="provider-date">
                            <?= Yii::$app->formatter->asDate($provider->created, 'dd MMMM yyyy') ?>
                        </div>
                        <p><?php $anounce = strip_tags($provider->description_kz, '<a>'); echo mb_substr($anounce,0, 200, 'UTF-8').' ...'; ?></p>
                    </div>
                <?php } ?>
            </div>
            <div class="provider-block">
                <div class="provider-item">
                    <img src="/img/dostizhenia.png" alt="">
                    <a href="<?= Url::toRoute(['/article/view', 'slug' => 'dostizenia']) ?>" class="provider-item_button">
                        <?= Yii::t('app', 'Achievements') ?>
                    </a>
                </div>
                <div class="provider-item">
                    <img src="/img/logistica.png" alt="">
                    <a href="<?= Url::toRoute(['/article/view', 'slug' => 'logistika']) ?>" class="provider-item_button">
                        <?= Yii::t('app', 'Logistic') ?>
                    </a>
                </div>
            </div>
        </div>
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
            <div class="map-container">
                <div class="maps">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=1YQN5sYpcd_vgol7XTAu5d54UHDRI27R&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true">
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

