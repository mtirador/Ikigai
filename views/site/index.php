<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Inicio';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Bienvenido a Ikigai, una aplicación para gestionar emociones y establecer objetivos personales.</p>

    <h2>Funciones Principales:</h2>
    <ul>
        <li>Registra tus emociones y pensamientos.</li>
        <li>Establece objetivos personales y realiza un seguimiento de su progreso.</li>
        <li>Visualiza tus emociones y pensamientos recientes.</li>
    </ul>

    <div class="row">
        <div class="col-lg-6">
            <?= Html::a('Regístrate', ['site/signup'], ['class' => 'btn btn-primary']) ?>
        </div>
        <div class="col-lg-6">
            <?= Html::a('Inicia Sesión', ['site/login'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>
</div>
