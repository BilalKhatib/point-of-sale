<?php views_path("partials/header");?>

    <div class="container-fluid border col-lg-4 col-md-5 mt-5 p-4 shadow-sm">
        <form method="post">
            <?php include '/var/www/html/point-of-sale/app/controllers/login.php';?>
            <center>
                <h3><i class="fa fa-user"></i> Login</h3>
                <div><?=esc(APP_NAME)?></div>
            </center>
            <br>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input value="<?=set_value('email')?>" name="email" type="email" class="form-control  <?=!empty($errors['email']) ? 'border-danger' : ''?>" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" autofocus autocomplete="off">
                <?php if(!empty($errors['email'])):?>
                <small class="text-danger col-12"><?=$errors['email']?></small>
                <?php endif;?>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password</span>
                <input name="password" type="password" class="form-control  <?=!empty($errors['password']) ? 'border-danger' : ''?>" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" autocomplete="off">
                <?php if(!empty($errors['password'])):?>
                <small class="text-danger col-12"><?=$errors['password']?></small>
                <?php endif;?>
            </div>

            <div class="row">
                <button class="btn btn-success" style="min-width:100px;font-size:20px;">Login</button>
            </div>

        </form>
    </div>

<?php views_path("partials/footer");?>