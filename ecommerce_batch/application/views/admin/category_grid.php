
<h2>Manage Category</h2>

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
            <th>Category Id</th>
            <th>Category Name</th>
            <th>Publication Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($all_category as $v_category) {
            ?>
            <tr class="odd gradeX">
                <td><?php echo $v_category->category_id ?></td>
                <td><?php echo $v_category->category_name ?></td>
                <td>
                    <?php
                    if ($v_category->publication_status == 1) {
                        echo "Published";
                    } else {
                        echo "Un Published";
                    }
                    ?>
                </td>

                <td>
                    <a href="<?php echo base_url()?>super_admin/edit_category/<?php echo $v_category->category_id ;?>" class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>
                        Edit
                    </a>

                    <a href="<?php echo base_url()?>super_admin/delete_category/<?php echo $v_category->category_id ;?>" onclick="return checkDelete();" class="btn btn-danger btn-sm btn-icon icon-left">
                        <i class="entypo-cancel"></i>
                        Delete
                    </a>

                    <?php
                    if ($v_category->publication_status == 1) {
                    ?>    
                    <a href="<?php echo base_url()?>super_admin/unpublished_category/<?php echo $v_category->category_id ;?>" class="btn btn-primary btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>
                        <?php echo "Un Published"; ?>
                        </a>
                   <?php } else { ?> 
                         <a href="<?php echo base_url()?>super_admin/published_category/<?php echo $v_category->category_id ;?>" class="btn btn-success btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>
                         <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Published"; ?> 
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

        </tr>
    </tfoot>
</table>