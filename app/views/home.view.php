<?php views_path('partials/header');?>

	<div class="d-flex">
		<div style="min-height:600px;" class="shadow-sm col-7 p-4">
			
			<div class="input-group mb-3"><h3> Items </h3>
			  <input type="text" class="ms-4 form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1" autofocus>
			  <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
			</div>

			<div class="js-products d-flex" style="flex-wrap: wrap;height: 90%;overflow-y: scroll;">
				
				<!--card-->
				<div class="card m-2 border-0" style="min-width: 200px;max-width: 200px;">
					<a href="#">
						<img src="assets/images/pepsi.png" class="w-100 rounded border">
					</a>
					<div class="p-2">
						<div class="text-muted">Pepsi</div>
						<div class="" style="font-size:20px"><b>$5.00</b></div>
					</div>
				</div>
				<!--end card-->

				<!--card-->
				<div class="card m-2 border-0" style="min-width: 200px;max-width: 200px;">
					<a href="#">
						<img src="assets/images/7up.png" class="w-100 rounded border">
					</a>
					<div class="p-2">
						<div class="text-muted">7UP</div>
						<div class="" style="font-size:20px"><b>$10.00</b></div>
					</div>
				</div>
				<!--end card-->

				<!--card-->
				<div class="card m-2 border-0" style="min-width: 200px;max-width: 200px;">
					<a href="#">
						<img src="assets/images/mirinda.png" class="w-100 rounded border">
					</a>
					<div class="p-2">
						<div class="text-muted">Mirinda</div>
						<div class="" style="font-size:20px"><b>$15.00</b></div>
					</div>
				</div>
				<!--end card-->

				
			</div>
		</div>
		
		<div class="col-5 bg-light p-4 pt-2">
			
			<div><center><h3>Cart <div class="badge bg-primary rounded-circle">3</div></h3></center></div>
			<div class="table-responsive" style="height:400px;overflow-y:scroll;">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Image</th><th>Description</th><th>Amount</th>
                    </tr>
                    <!-- item -->
                    <tr>
                        <td style="width:110px;"><img src="assets/images/pepsi.png" class="rounded border" style="width:100px;height:100px;"></td>
                        <td class="text-primary">
                            Pepsi
                            <div class="input-group my-3" style="max-width:150px;">
                                <span class="input-group-text text-primary" style="cursor:pointer;"><i class="fa fa-minus"></i></span>
                                <input type="text" class="form-control text-primary" placeholder="1" value="1">
                                <span class="input-group-text text-primary" style="cursor:pointer;"><i class="fa fa-plus"></i></span>
                            </div>
                        </td>
                        <td style="font-size:20px"><b>$5.00</b></td>
                    </tr>
                    <!-- end item -->
                    <!-- item -->
                    <tr>
                        <td style="width:110px;"><img src="assets/images/7up.png" class="rounded border" style="width:100px;height:100px;"></td>
                        <td class="text-primary">
                            7UP
                            <div class="input-group my-3" style="max-width:150px;">
                                <span class="input-group-text text-primary" style="cursor:pointer;"><i class="fa fa-minus"></i></span>
                                <input type="text" class="form-control text-primary" placeholder="1" value="1">
                                <span class="input-group-text text-primary" style="cursor:pointer;"><i class="fa fa-plus"></i></span>
                            </div>
                        </td>
                        <td style="font-size:20px"><b>$5.00</b></td>
                    </tr>
                    <!-- end item -->
                    <!-- item -->
                    <tr>
                        <td style="width:110px;"><img src="assets/images/mirinda.png" class="rounded border" style="width:100px;height:100px;"></td>
                        <td class="text-primary">
                            Mirinda
                            <div class="input-group my-3" style="max-width:150px;">
                                <span class="input-group-text text-primary" style="cursor:pointer;"><i class="fa fa-minus"></i></span>
                                <input type="text" class="form-control text-primary" placeholder="1" value="1">
                                <span class="input-group-text text-primary" style="cursor:pointer;"><i class="fa fa-plus"></i></span>
                            </div>
                        </td>
                        <td style="font-size:20px"><b>$5.00</b></td>
                    </tr>
                    <!-- end item -->
                </table>
            </div>
            <!-- total -->
            <div class="alert alert-success ps-5">
                <div class="col d-inline">Total: </div>
                <div class="col float-end d-inline pe-5">$15.00</div>
            </div>
            <!-- total end -->
            <!-- checkout -->
            <div class="">
                <button class="btn btn-success my-2 w-100 py-4">Checkout</button>
                <div class="d-flex">
                    <button class="btn btn-danger my-2 w-100 py-2">Clear All</button>
                    <button class="btn btn-primary my-2 w-100 py-2">Hold</button>
                </div>
            </div>
            <!-- end checkout -->
		</div>
	</div>	


<?php views_path('partials/footer');?>