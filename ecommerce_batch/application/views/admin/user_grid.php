
<h2>Manage User</h2>

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
            <th>User Id</th>
            <th>User Name</th>
            <th>Email Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($all_user as $v_user) {
            ?>
            <tr class="odd gradeX">
                <td><?php echo $v_user->admin_id ?></td>
                <td><?php echo $v_user->admin_name ?></td>
                 <td><?php echo $v_user->admin_email ?></td>
               
                

                <td>
                    <a href="<?php echo base_url()?>super_admin/edit_user/<?php echo $v_user->admin_id ;?>" class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>
                        Edit
                    </a>

                    <a href="<?php echo base_url()?>super_admin/delete_user/<?php echo $v_user->admin_id ;?>" class="btn btn-danger btn-sm btn-icon icon-left">
                        <i class="entypo-cancel"></i>
                        Delete
                    </a>
                  

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