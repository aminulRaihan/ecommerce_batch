
<h2>Manage Product</h2>

                              <?php
                        $message = $this->session->userdata('message');
                        if ($message) {
                            ?> 
                            <div class="alert alert-success">
                                <?php echo $message; ?>
                            </div>

                            <?php
                            $this->session->unset_userdata('message');
                        }
                        ?>
<table class="table table-bordered datatable" id="table-1">
    <thead>
        <tr>
            <th>Image</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Status</th>
            
             <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($all_product_details as $v_product) {
            ?>
            <tr class="odd gradeX">
                <td><img width="30" height="40" src="<?php echo base_url() . $v_product->product_image ?>"></td>
                <td><?php echo $v_product->product_name ?></td>
                <td class="col-md-1"><?php echo $v_product->product_price ?></td>
                <td class="col-md-1"><?php echo $v_product->product_quantity ?></td>
                
 
                <td class="col-md-1">
                    <?php
                    if ($v_product->publication_status == 1) {
                        echo "Active";
                    } else {
                        echo "Deactive";
                    }
                    ?>
                </td>

                <td>
                    <a href="<?php echo base_url()?>super_admin/edit_blog/<?php echo $v_product->product_id ;?>"
                       <strong> <i class="entypo-pencil"></i></strong>
                    </a>

                    <a href="<?php echo base_url()?>super_admin/delete_blog/<?php $v_product->product_id ;?>"
                       <strong> <i class="entypo-cancel"></i></strong>
                    </a>

                    <?php
                    if ($v_product->publication_status == 1) {
                    ?>    
                    <a href="<?php echo base_url()?>super_admin/unpublished_blog/<?php echo $v_product->product_id ;?>" class="btn btn-primary btn-sm">
                        
                        <?php echo "Active"; ?>
                        </a>
                   <?php } else { ?> 
                         <a href="<?php echo base_url()?>super_admin/published_blog/<?php echo $v_product->product_id ;?>" class="btn btn-success btn-sm ">
                        
                         <?php echo "Deactive"; ?> 
                        </a>
                    <?php }
                        
                    ?>

                </td>
            </tr>
            <?php
        }
        ?>


    </tbody>
    <tfoot>
        <tr>
            
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>

        </tr>
    </tfoot>
</table>