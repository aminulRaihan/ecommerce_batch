<div class="row">
    <div class="col-md-12">                        
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    Blog Content
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>super_admin/save_blog" class="form-horizontal form-groups-bordered">

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
                        <label for="field-1" class="col-sm-3 control-label">Blog Title</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="blog_title" placeholder="Blog Title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Blog Category <small>(Multiple Select)</small></label>

                        <div class="col-sm-5">

                            <select name="category_id" class="select2" multiple>
                                <option value="" >Select Category...</option>
                                <?php
                                foreach ($all_published_category as $v_category)
                                {
                                ?>
                                 <option value="<?php echo $v_category->category_id?>" ><?php echo $v_category->category_name?></option>
                                 <?php
                                }
                                ?>
                            
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label">Blog Short Description</label>

                        <div class="col-sm-5">
                            <textarea class="form-control autogrow" id="field-ta" name="blog_short_description" placeholder="Short Description"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label">Blog Long Description</label>

                        <div class="col-sm-8">
                            <textarea class="form-control " name="blog_long_description" id="ck_editor"></textarea>
                            <?php echo display_ckeditor($editor['ckeditor']);?>
                        </div>
                    </div>

                  <div class="form-group">
                        <label class="col-sm-3 control-label">Select Image</label>

                        <div class="col-sm-5">

                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <span class="btn btn-info btn-file">
                                    <input type="file" name="blog_image">
                                    
                                    
                                </span>
                                <span class="fileinput-filename"></span>
                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                            </div>

                        </div>
                    </div>
<!--  
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Publish Date</label>

                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">

                                <div class="input-group-addon">
                                    <a href="#"><i class="entypo-calendar"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->



                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Author Name</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="author_name" placeholder="Author_name">
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Author Email</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="author_email" placeholder="Author Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Blog Status</label>

                        <div class="col-sm-5">
                            <div class="radio ">
                                <input type="radio" id="rd-1" name="publication_status" value="1" checked>
                                <label>Published</label>
                            </div>

                            <div class="radio ">
                                <input type="radio" id="rd-2" name="publication_status" value="0" >
                                <label>Un Published</label>
                            </div>



                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Publish Blog</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>