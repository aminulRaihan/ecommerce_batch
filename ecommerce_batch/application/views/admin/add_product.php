<script language="javascript">
    var i = 1;
    function changeIt()
    {  
        if (i>4){
            alert("Maximum 5product image is allowed");
        }else{
            my_div.innerHTML = my_div.innerHTML +"<br><input type='file' name='product_image[]'>" 
           
        }
        i++;
    }
    
    $('[data-toggle=tab]').click(function(){
        if ($(this).parent().hasClass('active')){
            $($(this).attr("href")).toggleClass('active');
        }
    })
</script>



<div class="row">
    <div class="col-md-12">                        
        <div class="panel panel-primary" data-collapsed="0">



            <div class="panel-body">

                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>super_admin/save_product" class="form-horizontal form-groups-bordered">
                    
                    <div class="panel-heading">
                        <div>
                            Add Product
                        </div>
                      
                    </div>
                      <div class="form-group">
                            <div class="col-sm-offset-3">
                                <button type="submit" class="btn btn-success">Add Product</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    
                   
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


                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">General</a></li>
                            <li><a href="#tab2" data-toggle="tab">Image</a></li>
                            <li><a href="#tab3" data-toggle="tab">Special Offer</a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <!--GENERAL PRODUCT INFORMATION -->     
                                <div class="form-group">

                                    <label for="field-1" class="col-sm-3 control-label">Product Name</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="field-1" name="product_name" placeholder="Product Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Product Code</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="field-1" name="product_model" placeholder="product price">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Product Manufacture</label>

                                    <div class="col-sm-5">


                                        <select name="manufacturer_id" class="form-control" >
                                            <option value="" >Select Manufacture...</option>
                                            <?php
                                            foreach ($all_published_manufacturer as $v_manufacturer) {
                                                ?>
                                                <option value="<?php echo $v_manufacturer->manufacturer_id ?>" ><?php echo $v_manufacturer->manufacturer_name ?></option>
                                                <?php
                                            }
                                            ?>

                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Product Price</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="field-1" name="product_price" placeholder="product price">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Product Category <small>(Multiple Select)</small></label>

                                    <div class="col-sm-5">


                                        <select name="category_id" class="form-control" >
                                            <option value="" >Select Category...</option>
                                            <?php
                                            foreach ($all_published_category as $v_category) {
                                                ?>
                                                <option value="<?php echo $v_category->category_id ?>" ><?php echo $v_category->category_name ?></option>
                                                <?php
                                            }
                                            ?>

                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="field-ta" class="col-sm-3 control-label">Product Short Description</label>

                                    <div class="col-sm-5">
                                        <textarea class="form-control autogrow" id="field-ta" name="product_short_description" placeholder="Short Description"></textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="field-ta" class="col-sm-3 control-label">Product Long Description</label>

                                    <div class="col-sm-8">
                                        <textarea class="form-control " name="product_long_description" id="ck_editor"></textarea>
                                        <?php echo display_ckeditor($editor['ckeditor']); ?>
                                    </div>
                                </div>

                                <div class="form-group">
            
                                    <label for="field-1" class="col-sm-3 control-label">Product Quantity</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="field-1" name="product_quantity" placeholder="Product Quantity">

                                    </div>
                                </div>   
                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Product Re-Order Level</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="field-1" name="product_reorder_level" placeholder="Product Quantity">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Product Status</label>

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

                            </div>

                            <div class="tab-pane" id="tab2">
                                <!--IMAGE UPLOAD-->

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Select Image</label>

                                    <div class="col-sm-7">                          
                                        <button type="button" onClick="changeIt()">Add More Image</button>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <input  name="product_image[]" type="file" >   
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="radio" name="default_image" value="1" checked>  Default Image
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div id="my_div" class="col-sm-4">

                                            </div>
                                        </div>


                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane" id="tab3">
                                <!--PRODUCT SPECIAL OFFER -->

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Special offer Date Start</label>
                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control datepicker" name="date_start" data-format="yyyy-mm-dd">

                                            <div class="input-group-addon">
                                                <a href="#"><i class="entypo-calendar"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Special offer Date End</label>
                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control datepicker" name="date_end" data-format="yyyy-mm-dd">

                                            <div class="input-group-addon">
                                                <a href="#"><i class="entypo-calendar"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="field-1" class="col-sm-3 control-label">Product Special Price</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="field-1" name="product_special_price" placeholder="product special price">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>  

                    <!---->

                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $("input[type='submit']").click(function(){
            var $fileUpload = $("input[type='file']");
            if (parseInt($fileUpload.get(0).files.length)>2){
                alert("You can only upload a maximum of 2 files");
            }
        });    
    });​


</script>