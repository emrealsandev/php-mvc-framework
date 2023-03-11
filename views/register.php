<h1>Create an Account</h1>
<?php $form = \app\core\form\Form::begin('', 'post'); ?>
<div class="row">
    <div class="col">
        <?php echo $form->field($model, 'name') ?>
    </div>
    <div class="col">
        <?php echo $form->field($model, 'lastname') ?>
    </div>
</div>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
<button type="submit" class="btn btn-success mt-2">Submit</button>
<?php echo \app\core\form\Form::end(); ?>
<!-- <form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>İsim</label>
                <input type="text" name="name" value="< ?php echo !empty($model->name) ? $model->name : ''  ?>" class="form-control< ?php echo $model->hasError('name') ? ' is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    < ?php echo $model->getFirstError('name') ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Soyisim</label>
                <input type="text" name="lastname" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control">
    </div>
    <button type="submit" class="btn btn-success mt-2">Submit</button>
</form> -->