<?php views_path("partials/header");?>

    <div class="container-fluid border col-lg-4 col-md-5 mt-5 p-4 shadow-sm">
        <form method="post">
            
            <center>
                <h3><i class="fa fa-user"></i> Login</h3>
                <div><?=esc(APP_NAME)?></div>
            </center>
            <br>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" autofocus>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password</span>
                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
            </div>

            <div class="row">
                <button class="btn btn-success" style="min-width:100px;font-size:20px;">Login</button>
            </div>

        </form>
    </div>

<?php views_path("partials/footer");?>