<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Указанная ошибка возникла при обработке сервером Вашего запроса.
    </p>
    <p>
        Пожалуйста, заполните форму обратной связи с описанием ошибки, если Вы думаете, что ошибка возникла на стороне сервера.
    </p>
</div>
