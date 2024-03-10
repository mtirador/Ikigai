<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;
use rmrevin\yii\fontawesome\FA;

AppAsset::register($this);

rmrevin\yii\fontawesome\AssetBundle::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    
    <!-- nombres -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Marta Tirador Gutiérrez">
    <meta name="description" content="Aplicación para la gestión de emociones">
    <meta name="keywords" content="HTML, CSS, JavaScript, React">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Ikigai | Transforma tu vida</title>
    <?php $this->head() ?>
    
    
         <!-- Favicon -->
    <link rel="shortcut icon" href="logo.ico" />
    <link rel="icon" type="image/x-icon" href="logo.ico"/>

    
    
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<header>
    <?php
    NavBar::begin([
        'brandLabel' => '<div class="d-flex align-items-center">' . 
                        Html::img('@web/images/morado.png', ['alt'=>Yii::$app->name]) .
                        
                        '</div>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
    'options' => ['class' => 'navbar-nav mr-auto custom-margin-left'], // Alineación a la izquierda
    'items' => [
        ['label' => 'Inicio', 'url' => Yii::$app->homeUrl], //Inicio lleva a la home
        [
            'label' => 'CRUDs',
            'items' => [
                ['label' => 'Entradas', 'url' => ['/entradas/index']],
                ['label' => 'Pensamientos', 'url' => ['/pensamientos/index']],
                ['label' => 'Emociones', 'url' => ['/emociones/index']],
                ['label' => 'Sensaciones', 'url' => ['/sensaciones/index']],
                ['label' => 'Objetivos', 'url' => ['/objetivos/index']],
                ['label' => 'Registro de Pensamientos', 'url' => ['/registropensamientos/index']],
                ['label' => 'Registro de Emociones', 'url' => ['/registroemociones/index']],
                ['label' => 'Registro de Sensaciones', 'url' => ['/registrosensaciones/index']],
                ['label' => 'Tipos de emociones', 'url' => ['/tiposemociones/index']],
            ],
        ],
        ['label' => 'Objetivos', 'url' => ['/objetivos/mostrarobjetivos']], 
        ['label' => 'Diario', 'url' => ['/diario/crearentrada']], 
        ['label' => 'Neurotransmisores', 'url' => ['/site/mostrarinformacion']], // Ajusta la URL aquí
    ],
]);

    NavBar::end();
    ?>
</header>


<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
    
<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; Ikigai_MTG <?= date('Y') ?></p>
        <div class="social-icons float-right">
            <?= Html::a(FA::icon('facebook')->size(FA::SIZE_2X), 'https://www.facebook.com/TuPaginaDeFacebook', ['class' => 'profile-link']) ?>
           <?= Html::a(FA::icon('facebook')->size(FA::SIZE_2X), 'https://www.facebook.com/TuPaginaDeFacebook', ['style' => 'color: #B65598;']) ?>
        </div>
    </div>
</footer>






<?php $this->endBody() ?>
    
    <script src="<?= Url::to('@web/js/respuesta.js')?>"></script> <!-- Si o no (Cruds) -->
</body>
</html>
<?php $this->endPage() ?>
