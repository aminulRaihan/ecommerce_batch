
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
            <th>Manufacture Id</th>
            <th>Manufacture Name</th>
            <th>Manufacture Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($all_manufacture as $v_manufacture) {
            ?>
            <tr class="odd gradeX">
                <td><?php echo $v_manufacture->manufacturer_id ?></td>
                <td><?php echo $v_manufacture->manufacturer_name ?></td>
                <td>
                    <?php
                    if ($v_manufacture->publication_status == 1) {
                        echo "Active";
                    } else {
                        echo "Deactive";
                    }
                    ?>
                </td>

                <td>
                    <a href="<?php echo base_url()?>super_admin/edit_manufacture/<?php echo $v_manufacture->manufacturer_id ;?>" class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>
                        Edit
                    </a>

                    <a href="<?php echo base_url()?>super_admin/delete_manufacture/<?php echo $v_manufacture->manufacturer_id ;?>" onclick="return checkDelete();" class="btn btn-danger btn-sm btn-icon icon-left">
                        <i class="entypo-cancel"></i>
                        Delete
                    </a>

                    <?php
                    if ($v_manufacture->publication_status == 1) {
                    ?>    
                    <a href="<?php echo base_url()?>super_admin/unpublished_manufacture/<?php echo $v_manufacture->manufacturer_id ;?>" class="btn btn-primary btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>
                        <?php echo "Active"; ?>
                        </a>
                   <?php } else { ?> 
                         <a href="<?php echo base_url()?>super_admin/published_manufacture/<?php echo $v_manufacture->manufacturer_id ;?>" class="btn btn-success btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>
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

        </tr>
    </tfoot>
</table>