<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add Product
                        <a href="<?php echo base_url('product'); ?>" class="btn btn-danger float-right">BACK</a>
                    </h5>
                </div>

                <div class="card-body">
                    <form action="<?php echo base_url('product/store'); ?>" method="post">
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" class="form-control" id="pname" name="prod_name" >
                            <small><?php echo form_error('prod_name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">Product Price</label>
                            <input type="text" class="form-control" id="pprice" name="prod_price">
                        </div>
                        <div class="form-group">                  
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>