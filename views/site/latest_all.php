<?php
use yii\helpers\Html;
use yii\helpers\StringHelper;
use app\models\SeoPages;
$seo = SeoPages::find()->where(['name'=>'latests'])->one();
$this->title = $seo->seo_title;
$this->registerMetaTag(["name"=>"description","content"=>$seo->seo_descr]);

$this->params['breadcrumbs'][] = "Новинки";

$news = "";
foreach ($model as $new) {
   $news = $news."<div class='news-block'>";
   $news = $news.Html::a("<div class='news-img col-lg-4 col-md-4 col-sm-4 col-xs-4'><img class='img-responsive' style='max-height:130px;' src='".$new->img."'/></div>",['site/latest','id'=>$new->id]);
   $news = $news."<div style='border-left:1px solid #eee;margin-left:170px; text-align:left'>";
   $news = $news.Html::a($new->title,['site/latest','id'=>$new->id],['class'=>'news-title']);
   $news = $news."<div class='news-shorttext'>".StringHelper::truncateWords($new->short_text, 29, '...', false)."</div>";
   $news = $news."<div class='news-date'>Дата: ".date("d.m.Y",strtotime($new->date_news))."</div>";
   $news = $news."</div>";
   $news = $news."</div><hr/>";
}

 echo $news;