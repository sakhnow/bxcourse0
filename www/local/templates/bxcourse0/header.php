<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

$isMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;
?>
<!DOCTYPE html>
<!--[if lt IE 8]>
<html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]>
<html class="no-js"><![endif]-->
<head>
  <meta charset="utf-8">
  <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php $APPLICATION->ShowTitle(); ?></title>
  <?php $APPLICATION->ShowHead(); ?>

  <?php $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/common-styles.css'); ?>
  <link rel="icon" href="<?= SITE_TEMPLATE_PATH ?>/ico/favicon_bx.png">

  <!--[if lt IE 9]>
  <script src="<?= CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/js/vendor/modernizr-html5shiv-respond.min.js') ?>"></script>
  <![endif]-->
  <!--[if gte IE 9]><!-->
  <script src="<?= CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH . '/js/vendor/modernizr.min.js') ?>"></script>
  <!--<![endif]-->
  <?php
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/bootstrap/collapse.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/bootstrap/tooltip.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/plugins.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.touchSwipe.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vendor/jquery.ba-throttle-debounce.min.js');
  ?>
</head>
<body>
<!--[if lt IE 8]>
<p class="chromeframe">Вы используете <strong>устаревший </strong> браузер. Пожалуйста <a
        href="http://browsehappy.com/">
  обновите свой браузер</a> или <a href="http://www.google.com/chromeframe/?redirect=true">установите Google Chrome
  Frame</a> чтобы улучшить взаимодействие с сайтом.</p>
<![endif]-->
<?php $APPLICATION->ShowPanel(); ?>
<div class="sticky-wrap">
  <header>
    <div class="header-main">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-xs-12">
            <a class="logo" href="#">
              <div class="image">Intervolga.ru</div>
              <div id="slogan-rand" class="slogan">
                <noscript>Сайты и реклама в интернете</noscript>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="row">
              <div class="col-lg-7 col-xs-12 hidden-xs">
                <ul class="btn-list-inline">
                  Самый лучший производитель одежды
                </ul>
              </div>
              <div class="col-lg-5 col-xs-12 hidden-print">
                <div class="input-group-search">
                  <input type="text" class="form-control" placeholder="Поиск...">
                  <button class="btn btn-link" type="button"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <ul class="phone-list">
              <li><i>+7 (495)</i> <b>000-00-00</b></li>
              <li><i>+7 (8442)</i> <b>00-00-00</b></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <nav>
    <div class="navbar navbar-intervolga">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav">
            <span class="sr-only">Переключить навигацию</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">InterVolga.ru</a>
        </div>
        <div class="collapse navbar-collapse" id="top-nav">
          <ul class="nav navbar-nav">
            <li><a href="/">Главная страница</a></li>
            <li><a href="#">Каталог товаров</a></li>
            <li><a href="#">Новости компании</a></li>
            <li><a href="#">Гарантия</a></li>
            <li><a href="#">Доставка</a></li>
            <li><a href="#">Дилерам</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>


  <div class="container">
    <ol class="breadcrumb">
      <li><a href="#">Главная</a></li>
      <li><a href="#">Раздел</a></li>
      <li class="active">Детальная страница</li>
    </ol>
    <h1><?= $APPLICATION->ShowTitle(false) ?></h1>
  </div>
  <div class="container">