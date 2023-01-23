<?php views_path("partials/header");?>

    <div class="container-fluid border col-lg-5 col-md-6 mt-5 p-4">
        <form method="post">
            <?php include '/var/www/html/point-of-sale/app/controllers/signup.php';?>
            <center>
                <h3><i class="fa fa-user"></i> Signup</h3>
                <div><?=esc(APP_NAME)?></div>
            </center>
            <br>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Username</span>
                <input value="<?=set_value('username');?>" name="username" type="text" class="form-control <?=!empty($errors['username']) ? 'border-danger' : ''?>" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" autofocus>
                <br>
                <?php if(!empty($errors['username'])):?>
                <small class="text-danger col-12"><?=$errors['username']?></small>
                <?php endif;?>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input value="<?=set_value('email');?>" name="email" type="email" class="form-control <?=!empty($errors['email']) ? 'border-danger' : ''?>" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                <br>
                <?php if(!empty($errors['email'])):?>
                <small class="text-danger col-12"><?=$errors['email']?></small>
                <?php endif;?>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password</span>
                <input name="password" type="password" class="form-control <?=!empty($errors['password']) ? 'border-danger' : ''?>" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                <br>
                <?php if(!empty($errors['password'])):?>
                <small class="text-danger col-12"><?=$errors['password']?></small>
                <?php endif;?>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Confirm Password</span>
                <input name="password_retype" type="password" class="form-control <?=!empty($errors['password_retype']) ? 'border-danger' : ''?>" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="basic-addon1">
                <br>
                <?php if(!empty($errors['password_retype'])):?>
                <small class="text-danger col-12"><?=$errors['password_retype']?></small>
                <?php endif;?>
            </div>

            <button class="btn btn-danger">Cancel</button>
            <button class="btn btn-success float-end">Signup</button>

        </form>
    </div>

<?php views_path("partials/footer");?>