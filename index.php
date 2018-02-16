<?php
require 'connection.php';
$app=new \atk4\ui\App('Registration');
require 'visual.php';
$form = $app->layout->add('Form');
$form->setModel(new Record($db));
//$form->onSubmit(function($form)
