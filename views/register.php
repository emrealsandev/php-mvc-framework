<h1>Create an Account</h1>
<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>İsim</label>
                <input type="text" name="name" value="<?php echo !empty($model->name) ? $model->name : ''  ?>" class="form-control<?php echo $model->hasError('name') ? ' is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?php echo $model->getFirstError('name') ?>
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
</form>