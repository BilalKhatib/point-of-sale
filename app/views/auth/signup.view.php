<?php views_path("partials/header");?>

    <div class="container-fluid border col-lg-5 col-md-6 mt-5 p-4">
        <form method="post">
            
            <center>
                <h3><i class="fa fa-user"></i> Signup</h3>
                <div><?=esc(APP_NAME)?></div>
            </center>
            <br>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Username</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" autofocus>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password</span>
                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Confirm Password</span>
                <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="basic-addon1">
            </div>

            <button class="btn btn-danger">Cancel</button>
            <button class="btn btn-success float-end">Signup</button>

        </form>
    </div>

<?php views_path("partials/footer");?>