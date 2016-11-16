<?php
use common\models\Lang;
(Lang::getCurrent()->id == 1) ? $this->title = $model->title_en : ' ';
(Lang::getCurrent()->id == 2) ? $this->title = $model->title_ru : ' ';
(Lang::getCurrent()->id == 3) ? $this->title = $model->title_kz : ' ';

$this->registerMetaTag(['name'=> 'keywords', 'content' =>  $model->meta_keywords]);
$this->registerMetaTag(['name'=> 'description', 'content' => $model->meta_description]);

?>

<div class="cr">
    <div class="content-second">
        <?php if($model->photo) { ?>
            <div class="second-content-img-container">
                <div class="second-content-img">
                    <img src="<?= $model->image ?>" alt="">
                </div>
            </div>
        <?php } ?>
        <div class="title">
            <?= (Lang::getCurrent()->id == 1) ? $model->title_en : ' '; ?>
            <?= (Lang::getCurrent()->id == 2) ? $model->title_ru : ' '; ?>
            <?= (Lang::getCurrent()->id == 3) ? $model->title_kz : ' '; ?>
        </div>
        <?= (Lang::getCurrent()->id == 1) ? $model->description_en : ' '; ?>
        <?= (Lang::getCurrent()->id == 2) ? $model->description_ru : ' '; ?>
        <?= (Lang::getCurrent()->id == 3) ? $model->description_kz : ' '; ?>
    </div>
</div>