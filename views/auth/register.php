<h1 class="my-5 text-center">Create an account</h1>

<?php 
$form = app\core\form\Form::begin('', "post") ?>
    <div class="row">
        <div class="col-6">
            <?php echo $form->field($model, 'firstname') ?>
        </div>
        <div class="col-6">
            <?php echo $form->field($model, 'lastname') ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email')->emailField() ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php app\core\form\Form::end() ?>

<!-- <form action="" method="post">
    <div class="form-group mb-4">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" class="form-control">
    </div>
    <div class="form-group mb-4">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" class="form-control">
    </div>
    <div class="form-group mb-4">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group mb-4">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group mb-4">
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control">
    </div>
    <div>
        <button class="btn btn-primary">Login</button>
    </div>
</form> -->