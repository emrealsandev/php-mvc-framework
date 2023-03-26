<?php 
/** @var $model \app\models\User */
/** @var $this \app\core\View */
$this->title = 'Login';
?>
<h1>Login</h1>
<?php $form = \app\core\form\Form::begin('', 'post'); ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<button type="submit" class="btn btn-success mt-2">Submit</button>
<?php echo \app\core\form\Form::end(); ?>