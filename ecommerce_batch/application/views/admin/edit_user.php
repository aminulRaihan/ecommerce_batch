<div class="row">
    <div class="col-md-12">                        
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    Edit User
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" action="<?php echo base_url() ?>super_admin/update_user" method="post" class="form-horizontal form-groups-bordered">


                    <div class="form-group">

                        <label for="field-1" class="col-sm-3 control-label">User Name</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="admin_name" autocomplete="off" value="<?php echo $all_user->admin_name ?>">
                            <input type="hidden" name="admin_id" value="<?php echo $all_user->admin_id ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">User Email Address</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="admin_email" autocomplete="off" value="<?php echo $all_user->admin_email ?>" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Update Password</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" id="field-1" name="admin_password" autocomplete="off" placeholder="User Password">
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Update User</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>