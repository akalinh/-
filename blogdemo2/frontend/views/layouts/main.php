<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

        <title>Liberty NFT Marketplace - HTML CSS Template</title>


        <?= Html::cssFile('@web/vendor/bootstrap/css/bootstrap.min.css') ?>
        <?= Html::cssFile('@web/assets/moban6684/moban6684/assets/css/fontawesome.css') ?>
        <?= Html::cssFile('@web/assets/moban6684/moban6684/assets/css/templatemo-liberty-market.css') ?>
        <?= Html::cssFile('@web/assets/moban6684/moban6684/assets/css/animate.css') ?>
        <?= Html::cssFile('@web/assets/moban6684/moban6684/assets/css/swiper-bundle.min.css') ?>
    </head>
    <body style="background-color:pink !important; color: pink !important;">
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <?php $this->beginBody() ?>




    <header class="header-area header-sticky">
        <div class="container" >
            <div class="row">
    <div class="col-12">
        <nav id="w0" class="main-nav"  style="background-color: rgba(0, 0, 0, 0.5);">
            <a class="navbar-brand" href="/" style="color:pink;font-size:30px">BlogDemo</a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                    <ul id="w1" class="nav">
                        <li><a href="<?= Url::to(['site/about']) ?>" class="active">关于我们</a></li>
                        <li><a href="<?= Url::to(['site/contact']) ?>">联系我们</a></li>
<?php if (Yii::$app->user->isGuest) : ?>
                        <li><a href="<?= Url::to(['site/signup']) ?>">注册</a></li>
                        <li class="active"><a href="<?= Url::to(['site/login']) ?>">登录</a></li>
<?php else : ?>
    <li class="active">
        <?= Html::a(
            '退出 (' . Yii::$app->user->identity->username . ')',
            ['site/logout'],
            [
                'data' => ['method' => 'post'],
            ]
        ) ?>
    </li>
<?php endif; ?>
                    </ul>
        </nav>
    </div>
            </div>
        </div>
    </header>











<!--        --><?php
//        NavBar::begin([
//            'brandLabel' => 'BlogDemo',
//            'brandOptions'=> ['style'=>'color:yellow;font-size:23px'],
//            'brandUrl' => Yii::$app->homeUrl,
//            'options' => [
//                'class' => 'navbar-inverse navbar-fixed-top',
//            ],
//        ]);
//        $menuItems = [
//
//            ['label' => '关于我们', 'url' => ['/site/about']],
//            ['label' => '联系我们', 'url' => ['/site/contact']],
//        ];
//        if (Yii::$app->user->isGuest) {
//            $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
//            $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
//        } else {
//            $menuItems[] = '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    '退出 (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link']
//                )
//                . Html::endForm()
//                . '</li>';
//        }
//        echo Nav::widget([
//            'options' => ['class' => 'navbar-nav navbar-right'],
//            'items' => $menuItems,
//        ]);
//        NavBar::end();
//        ?>
    <div class="main-banner">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'options' => ['class' => 'breadcrumb', 'style'=>"background-color: rgba(0, 0, 0, 0.5);"],
                'encodeLabels' => false,
                'homeLink' => [
                    'label' => '<i class="glyphicon glyphicon-home"></i>',
                    'url' => Yii::$app->homeUrl,
                    'encode' => false,
                ],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>


    <footer>
        <div class="container" >
            <div class="row">
                <div class="col-lg-9">
            <p >&copy; BlogDemo <?= date('Y')?>&nbsp&nbsp&nbsp <a href="<?=Url::to(['site/rss']);?>"><img src="<?= Yii::$app->request->baseUrl ?>/a.webp" style="width: 20px !important; height: 20px !important;" alt="RSS" ></a></p>
                </div>
            </div>
        </div>
    </footer>
    <?= Html::jsFile("@web/assets/moban6684/moban6684/assets/js/isotope.min.js") ?>
    <?= Html::jsFile("@web/assets/moban6684/moban6684/assets/js/custom.js") ?>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>