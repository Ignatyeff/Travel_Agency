<?php
require '../vendor/autoload.php';
$db = new \atk4\data\Persistence_SQL('mysql:dbname=main;host=localhost','root','');
class Place extends \atk4\data\Model {
  public $table = 'places';
  function init() {
    parent::init();
    $this->addField('name',['required'=>TRUE,'caption'=>'City']);
    $this->hasMany('Record', new Record);
  }
}
class Record extends \atk4\data\Model {
  public $table = 'records';
  function init() {
    parent::init();
    $this->addField('name',['required'=>TRUE,'caption'=>'Имя']);
    $this->addField('surname',['required'=>TRUE,'caption'=>'Фамилия']);
    $this->addField('phone_number',['required'=>TRUE,'caption'=>'Номер телефона']);
    $this->addField('e_mail',['required'=>TRUE,'caption'=>'E-mail']);
    $this->addField('departure_date',['required'=>TRUE,'caption'=>'Departure date','type'=>'date']);
    $this->addField('arrival_date',['required'=>TRUE,'caption'=>'Arrival date','type'=>'date']);
    $this->hasOne('places_id', new Record)->addTitle();
  }
}
