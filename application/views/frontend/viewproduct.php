    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>View Product
                            <a href="<?php echo base_url('product/add'); ?>" class="btn btn-primary float-right">Add Product </a>
                        </h5>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($product as $row):
                                 ?>
<tr>
                                    <th scope="row"><?php echo $row->id; ?></th>
                                    <td><?php echo $row->prod_name;?></td>
                                    <td><?php echo $row->prod_price;?></td>
                                   <td><a href="<?php echo base_url('product/edit/'.$row->id); ?>" class="btn btn-success btn-sm">Edit</a>
                                   <a href="<?php echo base_url('product/delete/'.$row->id); ?>" class="btn btn-danger btn-sm">Delete</a></td>
                                </tr>

                            <?php endforeach?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>