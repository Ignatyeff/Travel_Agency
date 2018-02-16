<?php
require 'connection.php';
//$db = new \atk4\data\Persistence_SQL('mysql:dbname=travel;host=localhost','root','');
$app = new \atk4\ui\App('Travel Agency');
require 'visual.php';
$crud = $app->layout->add('Crud');
$crud->setModel(new Place($db));
