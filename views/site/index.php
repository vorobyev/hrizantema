<?php

use yii\bootstrap\Carousel;
use amass\panel\Panel;
use yii\helpers\Url;
use kartik\popover\PopoverX;
use app\models\News;
use yii\bootstrap\Html;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */

$this->title = 'Образовательный центр Хризантема';
?>
<div class="site-index">
<?php
echo Carousel::widget([
    'options'=>[
        'class'=>'slide carousel-fade text-center',
        'style'=>'max-width:1000px; margin:0 auto;',
        
    ],
    'controls'=>['<span class="glyphicon glyphicon-chevron-left"></span>','<span class="glyphicon glyphicon-chevron-right"></span>'],
    'items' => [
        [
            'content' => '<img  src="'.Yii::getAlias('@web').'/images/slider/vizazhist11.jpg"/>',
            'caption' => '<div class="hidden-xs hidden-sm"><h2>Обучайся новому</h2><h4>Базовые курсы и дополнительное образование к основному <a href="">"Визажист"</a></h4></div>'
            .'<div class="hidden-lg hidden-md"><h4>Обучайся новому</h4><h5>Базовые курсы и дополнительное образование к основному <a href="">"Визажист"</a></h5></div>',
            
        ],
        [
            'content' => '<img src="'.Yii::getAlias('@web').'/images/slider/parikmaker11.jpg"/>',
            'caption' => '<div class="hidden-xs hidden-sm"><h2>Приобретай полезные навыки</h2><h4>Курсы <a href="">"Сам себе парихмахер"</a> и <a href="">"Сам себе визажист"</a> <br/>для самообразования</h4></div>'
            .'<div class="hidden-lg hidden-md"><h4>Приобретай полезные навыки</h4><h5>Курсы <a href="">"Сам себе парихмахер"</a> и <a href="">"Сам себе визажист"</a> <br/>для самообразования</h5></div>',
            'options' => [],
        ],
        [
            'content' => '<img src="'.Yii::getAlias('@web').'/images/slider/manikur11.jpg"/>',
            'caption' => '<div class="hidden-xs hidden-sm"><h2>Получай современное образование</h2><h4>Программы обучения <a href="">"Мастер маникюра"</a>, <a href="">"Мастер педикюра"</a> и <a href="">"Основы художественной росписи"</a></h4></div>'
            .'<div class="hidden-lg hidden-md"><h4>Получай современное образование</h4><h5>Программы обучения <a href="">"Мастер маникюра"</a>, <a href="">"Мастер педикюра"</a> и <a href="">"Основы художественной росписи"</a></h5></div>',
            'options' => [],
        ],
        [
            'content' => '<img src="'.Yii::getAlias('@web').'/images/slider/parikmaker22.jpg"/>',
            'caption' => '<div class="hidden-xs hidden-sm"><h2>Изучай дополнительные профессии</h2><h4>Профессиональные курсы <a href="">"Парикмахер-модельер"</a>,<a href="">"Колорист"</a>,<a href="">"Свадебный стилист"</a> и другие</h4></div>'
            .'<div class="hidden-lg hidden-md"><h4>Изучай дополнительные профессии</h4><h5>Профессиональные курсы <a href="">"Парикмахер-модельер"</a>,<a href="">"Колорист"</a>,<a href="">"Свадебный стилист"</a> и другие</h5></div>',
            'options' => [],
        ],
    ]
]);
$blockNews = News::find()->where(['type'=>'1'])->all();
$news = "";
foreach ($blockNews as $new) {
   $news = $news."<div class='news-block'>";
   $news = $news.Html::a("<div class='news-img col-lg-4 col-md-4 col-sm-4 col-xs-4'><img class='img-responsive' src='".$new->img."'/></div>",['site/news','id'=>$new->id]);
   $news = $news."<div style='border-left:1px solid #eee;margin-left:170px; text-align:left'>";
   $news = $news.Html::a($new->title,['site/news','id'=>$new->id],['class'=>'news-title']);
   $news = $news."<div class='news-shorttext'>".StringHelper::truncateWords($new->short_text, 29, '...', false)."</div>";
   $news = $news."<div class='news-date'>Дата: ".date("d.m.Y",strtotime($new->date_news))."</div>";
   $news = $news."</div>";
   $news = $news."</div><hr/>";
}
$news = $news."<div class='news-under'>Все новости <span style='font-size:11pt;' class='glyphicon glyphicon-arrow-right'></span></div>";

$blockNews2 = News::find()->where(['type'=>'2'])->all();
$news2 = "";
foreach ($blockNews2 as $new) {
   $news2 = $news2."<div class='news-block'>";
   $news2 = $news2.Html::a("<div class='news-img col-lg-4 col-md-4 col-sm-4 col-xs-4'><img class='img-responsive' src='".$new->img."'/></div>",['site/news','id'=>$new->id]);
   $news2 = $news2."<div style='border-left:1px solid #eee;margin-left:170px; text-align:left'>";
   $news2 = $news2.Html::a($new->title,['site/news','id'=>$new->id],['class'=>'news-title']);
   $news2 = $news2."<div class='news-shorttext'>".StringHelper::truncateWords($new->short_text, 29, '...', false)."</div>";
   $news2 = $news2."<div class='news-date'>Дата: ".date("d.m.Y",strtotime($new->date_news))."</div>";
   $news2 = $news2."</div>";
   $news2 = $news2."</div><hr/>";
}
$news2 = $news2."<div class='news-under'>Все акции <span style='font-size:11pt;' class='glyphicon glyphicon-arrow-right'></span></div>";
       
$blockNews3 = News::find()->where(['type'=>'3'])->all();
$news3 = "";
foreach ($blockNews3 as $new) {
   $news3 = $news3."<div class='news-block'>";
   $news3 = $news3.Html::a("<div class='news-img col-lg-4 col-md-4 col-sm-4 col-xs-4'><img class='img-responsive' src='".$new->img."'/></div>",['site/news','id'=>$new->id]);
   $news3 = $news3."<div style='border-left:1px solid #eee;margin-left:170px; text-align:left'>";
   $news3 = $news3.Html::a($new->title,['site/news','id'=>$new->id],['class'=>'news-title']);
   $news3 = $news3."<div class='news-shorttext'>".StringHelper::truncateWords($new->short_text, 29, '...', false)."</div>";
   $news3 = $news3."<div class='news-date'>Дата: ".date("d.m.Y",strtotime($new->date_news))."</div>";
   $news3 = $news3."</div>";
   $news3 = $news3."</div><hr/>";
}
$news3 = $news3."<div class='news-under'>Все новинки <span style='font-size:11pt;' class='glyphicon glyphicon-arrow-right'></span></div>";
 

$blockNews4 = News::find()->where(['type'=>'4'])->all();
$news4 = "";
foreach ($blockNews4 as $new) {
   $news4 = $news4."<div class='news-block'>";
   $news4 = $news4.Html::a("<div class='news-img col-lg-4 col-md-4 col-sm-4 col-xs-4'><img class='img-responsive' src='".$new->img."'/></div>",['site/news','id'=>$new->id]);
   $news4 = $news4."<div style='border-left:1px solid #eee;margin-left:170px; text-align:left'>";
   $news4 = $news4.Html::a($new->title,['site/news','id'=>$new->id],['class'=>'news-title']);
   $news4 = $news4."<div class='news-shorttext'>".StringHelper::truncateWords($new->short_text, 29, '...', false)."</div>";
   $news4 = $news4."<div class='news-date'>Дата: ".date("d.m.Y",strtotime($new->date_news))."</div>";
   $news4 = $news4."</div>";
   $news4 = $news4."</div><hr/>";
}
$news4 = $news4."<div class='news-under'>Все скидки <span style='font-size:11pt;' class='glyphicon glyphicon-arrow-right'></span></div>";
 
        
        
        
        
?>

</div>
<hr/>


<div class="block-news hidden-xs "> 
    <div class="news-capt text-warning col-lg-3 col-md-3 col-sm-3 " style="padding:0px;" id='button1' onclick='showWindow(1);'><span style="height:26px;display:block; float:right; border-right:1px solid #d9534f; margin-top:12px;"></span>Новости&nbsp;<span style="font-size:10pt" class="glyphicon glyphicon-triangle-bottom"></span></div>
    <div class="news-capt text-info col-lg-3 col-md-3 col-sm-3" style="padding:0px;" id='button2' onclick='showWindow(2);'><span style="height:26px;display:block; float:right; border-right:1px solid #d9534f; margin-top:12px;"></span>Акции&nbsp;<span style="font-size:10pt" class="glyphicon glyphicon-triangle-bottom"></span></div>
    <div class="news-capt text-primary col-lg-3 col-md-3 col-sm-3" style="padding:0px;" id='button3' onclick='showWindow(3);'><span style="height:26px;display:block; float:right; border-right:1px solid #d9534f; margin-top:12px;"></span>Новинки&nbsp;<span style="font-size:10pt" class="glyphicon glyphicon-triangle-bottom"></span></div>
    <div class="news-capt text-error col-lg-3 col-md-3 col-sm-3" style="padding:0px;" id='button4' onclick='showWindow(4);'>Скидки&nbsp;<span style="font-size:10pt" class="glyphicon glyphicon-triangle-bottom"></span></div>
</div>

<div class="hidden-xs "> 
    <div class=" col-lg-8 col-lg-offset-0 col-md-offset-1  window1" id='window1'><?=$news?></div>
    <div class=" col-lg-8 col-lg-offset-1 col-md-offset-1  window1" id='window2'><?=$news2?></div>
    <div class=" col-lg-8 col-lg-offset-2 col-md-offset-1  window1" id='window3'><?=$news3?></div>
    <div class=" col-lg-8 col-lg-offset-3 col-md-offset-1  window1" id='window4'><?=$news4?></div>
</div>

<div class="block-news2 hidden-lg hidden-md hidden-sm"> 
    <div class="news-capt text-info col-xs-6" id='button2_1' onclick='showWindow2(1);'><span style="height:26px;display:block; float:right; border-right:1px solid #d9534f; margin-top:12px;"></span>Новости&nbsp;<span style="font-size:10pt" class="glyphicon glyphicon-triangle-bottom"></span></div>
    <div class="news-capt text-info col-xs-6" id='button2_2' onclick='showWindow2(2);'>Акции&nbsp;<span style="font-size:10pt" class="glyphicon glyphicon-triangle-bottom"></span></div>

    <hr style="width:80%;"/>
        <div style='margin-top:-20px;'>
            <div class=" col-xs-11 window1" id='window2_1'><?=$news?></div>
            <div class=" col-xs-11 window1" id='window2_2'><?=$news2?></div>
        </div>
    <div class="news-capt text-info col-xs-6" id='button2_3' onclick='showWindow2(3);'><span style="height:26px;display:block; float:right; border-right:1px solid #d9534f; margin-top:12px;"></span>Новинки&nbsp;<span style="font-size:10pt" class="glyphicon glyphicon-triangle-bottom"></span></div>
    <div class="news-capt text-info col-xs-6" id='button2_4' onclick='showWindow2(4);'>Скидки&nbsp;<span style="font-size:10pt" class="glyphicon glyphicon-triangle-bottom"></span></div>

</div>
<div class="hidden-lg hidden-md hidden-sm"> 
        <div class=" col-xs-11 window1" id='window2_3'><?=$news3?></div>
        <div class=" col-xs-11 window1" id='window2_4'><?=$news4?></div>
</div>


<hr style="width:100%">

<div class="caption_my text-left col-lg-offset-1 col-md-offset-1 col-sm-offset-2 col-xs-offset-2">
    <a class="not-hover" id="about">О НАС</a>
</div>

    
 <?php
 $this->registerJs(""
    .'$("[data-toggle=\'popover-x\']").popoverX();'
."");
 include(__DIR__.'/menu1_lg.php');
 
 include(__DIR__.'/menu1_xs.php');
 ?>
 
  
  
    


<div class="caption_my text-left col-lg-offset-1 col-md-offset-1 col-sm-offset-2 col-xs-offset-2" style="padding-top:40px;padding-bottom:40px;">
    <div ><a class="not-hover" id="collective">КОЛЛЕКТИВ</a></div>
</div> 

<div style='display:flex'>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="margin:auto; min-width: 100px">
        <img class='img-responsive img-collective' src='<?=Yii::getAlias('@web')?>/images/collective/portret1.jpg'/>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 text-collective" style="margin:auto">

            <b>Иванова Лариса Ивановна</b> - c другой стороны сложившаяся структура организации позволяет оценить значение форм развития. Значимость этих проблем настолько очевидна, что консультация с широким активом влечет за собой процесс внедрения и модернизации направлений прогрессивного развития.

    </div>
</div>

<div class="visible-xs col-lg-10" style="margin-top:40px;"></div>

<div style='display:flex'>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 text-collective text-right" style="margin:auto">

            <b>Комарова Анастасия Ивановна</b> - реализация намеченных плановых заданий позволяет выполнять важные задания по разработке новых предложений. Равным образом рамки и место обучения кадров играет важную роль в формировании существенных финансовых и административных условий. 

    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="margin:auto; min-width: 100px">
        <img class='img-responsive img-collective' src='<?=Yii::getAlias('@web')?>/images/collective/portret2.jpg'/>
    </div>
</div>

<div class="visible-xs col-lg-10" style="margin-top:40px;"></div>

<div style='display:flex'>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="margin:auto; min-width: 100px">
        <img class='img-responsive img-collective' src='<?=Yii::getAlias('@web')?>/images/collective/portret3.jpg'/>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 text-collective" style="margin:auto">

            <b>Сидоров Игорь Алексеевич</b> - задача организации, в особенности же новая модель организационной деятельности представляет собой интересный эксперимент проверки позиций, занимаемых участниками в отношении поставленных задач. Разнообразный и богатый опыт дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации модели развития.

    </div>
</div>

<div class="visible-xs col-lg-10" style="margin-top:40px;"></div>

<div style='display:flex'>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 text-collective text-right" style="margin:auto">

            <b>Петрова Надежда Петровна</b> - идейные соображения высшего порядка, а также сложившаяся структура организации требуют от нас анализа существенных финансовых и административных условий.

    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="margin:auto; min-width: 100px">
        <img class='img-responsive img-collective' src='<?=Yii::getAlias('@web')?>/images/collective/portret4.jpg'/>
    </div>
</div>