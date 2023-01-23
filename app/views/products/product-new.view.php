<?php views_path("partials/header");?>

    <div class="container-fluid border rounded m-2 p-4 col-lg-4 mx-auto">
        <form method="post">
            
            <h5 class="text-primary"><i class="fa fa-hamburger"></i> Add Product</h5>
            
            <div class="input-group mb-3">
                <span class="input-group-text">Product Name</span>
                <input name="description" type="text" class="form-control" placeholder="Product Name" aria-label="Product Name">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Product Barcode<small class="text-muted">(optional)</small></span>
                <input name="barcode" type="text" class="form-control" placeholder="Product barcode" aria-label="Product barcode">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Qty</span>
                <input name="qty" value="1" type="number" class="form-control" placeholder="Quantity" aria-label="Quantity">
                <span class="input-group-text">Amount</span>
                <input name="amount" value="0.00" step="0.01" type="number" class="form-control" placeholder="Amount" aria-label="Amount">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Product Image</span>
                <input name="image" type="file" class="form-control">
            </div>

            <button type="button" class="btn btn-danger">Cancel</button>
            <button class="btn btn-success float-end">Save</button>

        </form>
    </div>

<?php views_path("partials/footer");?>