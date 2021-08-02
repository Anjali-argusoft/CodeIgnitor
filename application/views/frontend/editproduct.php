<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Product
                        <a href="<?php echo base_url('product'); ?>" class="btn btn-danger float-right">BACK</a>
                    </h5>
                </div>

                <div class="card-body">
                    <form action="<?php echo base_url('product/update/'. $product->id); ?>" method="post">
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" class="form-control" id="pname" name="prod_name" value="<?php echo $product->prod_name; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="">Product Price</label>
                            <input type="text" class="form-control" id="pprice" name="prod_price" value="<?php echo $product->prod_price; ?>">
                        </div>
                        <div class="form-group">                  
                        <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>