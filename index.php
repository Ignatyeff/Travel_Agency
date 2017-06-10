<?PHP


require 'vendor/autoload.php';

//require 'conect.php';

use \atk4\ui\Button;

/* creating page */

$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');

/* button for people who are already registered */

$button = new Button();
$button->set('Log in');
$button->set(['primary'=>true]);
$button->set(['size small'=>true]);
$button->link('login.php');
$app->add($button);

/* connecting to database */

$db = new
\atk4\data\Persistence_SQL('mysql:host=127.0.0.1;dbname=register;charset=utf8', 'root', '');

/* making form for user and connecting to table in database */

class user extends \atk4\data\Model {
	public $table = 'users';

function init() {
	parent::init();
	$this->addField('name');
	$this->addField('surname');
	$this->addField('phone_number');
  $this->addField('email');
  $this->addField('password', ['type'=>'password']);
}
}

$form = $app->layout->add('Form');
$form->setModel(new user($db));
$form->onSubmit(function($form) {
	If ($form->model['email'] == '') {
		return $form->error('email', "This place can't be empty.");
	}
		If ($form->model['password'] == '') {
		return $form->error('password', "This place can't be empty.");
	}
  switch ($form->model['password']) {
    case 'password':
    case 'Password':
    case '12345' :
    case 'qwerty':
      return $form->error('password',"Very easy password");
  }
	$form->model->save();
	//return $form->success('You were successfully registered');
  return new \atk4\ui\jsExpression('document.location = "main.php" ');
});













/* $m_register = new \atk4\data\Model(new \atk4\data\Persistence_Array($db));
$m_register->addField('name');
$m_register->addField('surname');
$m_register->addField('phone_number');
$m_register->addField('e-mail');
$m_register->addField('password');

$f = $app->add(new \atk4\ui\Form(['segment'=>TRUE]));
$f->setModel($m_register);

$f->onSubmit(function ($f) {

      $f->model->save();

}); */
