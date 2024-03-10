<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->registerCssFile(Url::to('@web/css/neurotransmisores.css'));
$this->registerJsFile('@web/js/neuro.js', ['depends' => [\yii\web\JqueryAsset::class]]);
?>




<div id="app"></div>