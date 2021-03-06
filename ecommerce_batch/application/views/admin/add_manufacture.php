<div class="row">
    <div class="col-md-12">                        
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    Add Manufacturer
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form role="form"  action="<?php echo base_url() ?>super_admin/save_manufacture" method="post"  class="form-horizontal form-groups-bordered" >

                      
                    <div class="form-group">
                        
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
                        <div id="err"></div>
                            
                        <label for="field-1" class="col-sm-3 control-label">Manufacturer Name</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control"  name="manufacturer_name"  placeholder="Category Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label">Manufacturer Description</label>

                        <div class="col-sm-5">
                            <textarea class="form-control autogrow"  name="manufacturer_description" placeholder="Category Description"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">Publication Status</label>

                        <div class="col-sm-5">
                            <div class="radio ">
                                <input type="radio" id="rd-1" name="publication_status" value="1" checked>
                                <label>Active</label>
                            </div>

                            <div class="radio ">
                                <input type="radio" id="rd-2" name="publication_status" value="0">
                                <label>Deactive</label>
                            </div>



                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Add Manufacture</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>