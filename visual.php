<?php

$app->initLayout('Admin');
$app->layout->leftMenu->addItem(['Main', 'icon'=>'dashboard'],['index']);
$app->layout->leftMenu->addItem(['Places', 'icon'=>'plane'],['places']);
$app->layout->leftMenu->addItem(['Admin', 'icon'=>'building'],['users']);
