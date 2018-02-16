<?php
require 'connection.php';
$app = new \atk4\ui\App('Пользователи');
require 'visual.php';
$crud = $app->layout->add('CRUD');
$crud->setModel(new Record($db));
$crud->addQuickSearch(['name','surname','phone_number','email','departure','arrival',]);

















/*require '../vendor/autoload.php';
$db = new \atk4\data\Persistence_SQL('mysql:dbname=travel;host=localhost','root','');
$app = new \atk4\ui\App('Travel Agency');
$app->initLayout('Admin');
$crud = $app->layout->add('Crud');
$crud->setModel(new User($db));*/
