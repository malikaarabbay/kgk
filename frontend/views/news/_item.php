<?php
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;
use common\models\Lang;
use common\models\Text;
?>
<?php if(Lang::getCurrent()->id == 1 && $model->title_en) { ?>
    <li class="news-item">
        <a href="<?= $model->link_en ?>" class="news-item__img">
            <?=
            EasyThumbnailImage::thumbnailImg(
                $model->imagePath,
                277,
                180,
                EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                [
                    'alt' => '',
                    'class' => ''
                ]
            );
            ?>
        </a>
        <div class="news-item__text">
            <a href="<?= $model->link_en ?>" class="news-item__titel">
                <?= $model->title_en ?>
            </a>
            <p><?php $anounce = strip_tags($model->description_en, '<a>'); echo mb_substr($anounce,0, 200, 'UTF-8').' ...'; ?></p>
            <a href="<?= $model->link_en ?>" class="read-more">
                <?= Yii::t('app', 'Read more') ?>...
            </a>
        </div>
    </li>
<?php } elseif(Lang::getCurrent()->id == 2 && $model->title_ru) { ?>
    <li class="news-item">
        <a href="<?= $model->link_ru ?>" class="news-item__img">
            <?=
            EasyThumbnailImage::thumbnailImg(
                $model->imagePath,
                277,
                180,
                EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                [
                    'alt' => '',
                    'class' => ''
                ]
            );
            ?>
        </a>
        <div class="news-item__text">
            <a href="<?= $model->link_ru ?>" class="news-item__titel">
                <?= $model->title_ru ?>
            </a>
            <p><?php $anounce = strip_tags($model->description_ru, '<a>'); echo mb_substr($anounce,0, 200, 'UTF-8').' ...'; ?></p>
            <a href="<?= $model->link_ru ?>" class="read-more">
                <?= Yii::t('app', 'Read more') ?>...
            </a>
        </div>
    </li>
<?php } elseif(Lang::getCurrent()->id == 3 && $model->title_kz) { ?>
    <li class="news-item">
        <a href="<?= $model->link_kz ?>" class="news-item__img">
            <?=
            EasyThumbnailImage::thumbnailImg(
                $model->imagePath,
                277,
                180,
                EasyThumbnailImage::THUMBNAIL_OUTBOUND,
                [
                    'alt' => '',
                    'class' => ''
                ]
            );
            ?>
        </a>
        <div class="news-item__text">
            <a href="<?= $model->link_kz ?>" class="news-item__titel">
                <?= $model->title_kz ?>
            </a>
            <p><?php $anounce = strip_tags($model->description_kz, '<a>'); echo mb_substr($anounce,0, 200, 'UTF-8').' ...'; ?></p>
            <a href="<?= $model->link_kz ?>" class="read-more">
                <?= Yii::t('app', 'Read more') ?>...
            </a>
        </div>
    </li>
<?php } ?>


