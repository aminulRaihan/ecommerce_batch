
                <div class="row">
                    <div class="col-md-12">
                        <p class="product-heading"><?php echo $product_info->product_name ?></p>
                    </div>                
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active"><?php echo $product_info->product_name ?></li>
                        </ol>

                    </div>                
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="col-md-12">
                            <img width="230" height="270" src="<?php echo base_url() . $product_info->product_image ?>" >   
                        </div>
                        <div class="col-md-12 padding-botom-2 padding-top-2">

                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <!-- The container for the modal slides -->
                                <div class="slides"></div>
                                <!-- Controls for the borderless lightbox -->
                                <h3 class="title"></h3>
                                <a class=" prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                                <!-- The modal dialog, which will be used to wrap the lightbox content -->
                                <div class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title"></h4>
                                            </div>
                                            <div class="modal-body next"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left prev">
                                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                                    Previous
                                                </button>
                                                <button type="button" class="btn btn-primary next">
                                                    Next
                                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="links">
                                <?php 
                                foreach ($product_image as $image) {
                                 ?>    
                                
                               
                                <a href="<?php echo base_url() . $image->product_image ?>" target="_top"  data-gallery>
                                    <img width="43" height="50" src="<?php echo base_url() . $image->product_image ?>" >
                                </a>
                           
                                <?php 
                                }
                                ?>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-9">

                        <div class="row">
                            <div class="col-md-8">
                                <p ><strong>Brand:</strong> <a href="#"><?php echo $product_info->manufacturer_name ?></a> </p>
                                <p><strong>Product Code:</strong> <?php echo $product_info->product_model ?></p>
                                <p><strong>Availability:</strong> In Stock</p>

                            </div> 
                            <div class="col-md-4">
                                <img src=" <?php echo base_url()?>img/stars-0.png">

                            </div>                         
                        </div>  

                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $product_info->product_short_description ?>
                            </div>
                            <div class="col-md-12">
                                <div class="border"></div>
                            </div>
                            <div class="col-md-12 price">
                                Price: <?php
                                            if ($product_info->product_special_price) {
                                                ?>
                                                <span class="price-h2-line">$<?php echo $product_info->product_price ?></span> 
                                                <?php
                                            }
                                            ?>
                                            &nbsp;&nbsp;<span class="price-h2">$<?php echo $product_info->product_special_price ?></span>
                                            <?php
                                            if ($product_info->product_special_price==NULL) {
                                                ?>
                                                <span class="price-h2">$<?php echo $product_info->product_price ?></span> 
                                                <?php
                                            }
                                            ?>
                            </div>
                            <div class="col-md-12">
                                <div class="border"></div>
                            </div>                               
                        </div>
                        <div class="row">
                            <div class="col-md-11">
                                <form action="<?php echo base_url();?>cart/add_to_cart/<?php echo $product_info->product_id?>" method="post">
                                <div class="col-md-2">
                                    <input type="text" name="qty" value="1" class="form-control input-lg" >
                                    <input type="hidden" name="product_id" value="<?php echo $product_info->product_id;?>" class="form-control input-lg" >
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-blue btn-icon btn-lg icon-left btn-text">
                                        <i class="fa fa-shopping-cart"></i>Add to Cart	
                                    </button>
                                    
                                 
                                </div>
                                </form>
                                    <div class="col-md-3 text-left">
                                    <button type="button" class="btn btn-blue btn-icon btn-lg icon-left btn-text">
                                        <i class="fa fa-shopping-cart"></i>Add to Wish 
                                        List	
                                    </button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-blue btn-icon btn-lg icon-left btn-text ">
                                        <i class="fa fa-shopping-cart"></i>Add to Compare	
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="border"></div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="row">
                    <div class="col-md-12 padding-top-3">

                        <ul class="nav nav-tabs bordered"><!-- available classes "bordered", "right-aligned" -->
                            <li class="active"><a href="#Description" data-toggle="tab">Description</a></li>
                            <li><a href="#Reviews" data-toggle="tab">Reviews(0)</a></li>
                           
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="Description">

                                <div class="scrollable" data-height="120">
                                    <?php echo $product_info->product_long_description ?>
                                   
                                </div>

                            </div>
                            <div class="tab-pane" id="Reviews">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="border-all">There are no reviews for this product.</div>
                                    </div>
                                </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <h3>WRITE A REVIEW</h3>
                                        <br>
                                        
                                        <div class="col-sm-7">
                                            <p><strong>Your Name</strong></p>
                                            <input type="text" class="form-control" id="field-1">
                                        </div>
                                        <div class="col-sm-7 padding-top-3">
                                            <p><strong>Your Comments</strong></p>
                                            <textarea class="form-control" rows="6" id="field-ta" placeholder="Textarea"></textarea>
                                        </div>
                                        
                                         <div class="col-sm-7 padding-top-3">
                                             <strong>Rating:</strong> Bad
                                            <input type="radio" name="optionsRadios"  value="option1">
                                            <input type="radio" name="optionsRadios"  value="option1">
                                            <input type="radio" name="optionsRadios"  value="option1">
                                            <input type="radio" name="optionsRadios"  value="option1">
                                            <input type="radio" name="optionsRadios"  value="option1"> Good
                                        </div> 
                                        
                                         <div class="col-sm-7 padding-top-3">
                                             <button type="submit" class="btn btn-default">Submit</button>    
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
           
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h1>Related Product</h1>
                    </div>
                    <br><br>
                </div>

                <div class="row">
                    <!--PRODUCT DISPLAY START -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="wrapper-product">
                            <section class="row-product">
                                <div class="container-item">
                                    <div class="item-sproduct">
                                        <img src="<?php echo base_url()?>img/salwar-1.jpg">
                                        <div class="item-overlay">

                                           
                                        </div>
                                        <div class="item-content">
                                            <div class="item-top-content">
                                                <div class="item-top-content-inner">
                                                    <div class="item-product">

                                                        <p class="product-short-des">Alluring Black & Off white</p>
                                                        <span class="price-h2">$100</span>

                                                    </div>

                                                </div>	
                                            </div>
                                            <div class="item-add-content">
                                                <div class="item-add-content-inner">
                                                    <!-- <div class="section">
                                                            <h4>Sizes</h4>
                                                            <p>40,41,42,43,44,45</p>
                                                    </div> -->
                                                    <div class="section">

                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i> 
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wish List" id="tooltip1">
                                                            <i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" id="tooltip1">
                                                            <i class="fa fa-refresh"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Details" id="tooltip1">
                                                            <i class="fa fa-caret-square-o-right"></i> 
                                                        </button>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </section>
                        </div>
                    </div>    <!--PRODUCT DISPLAY END -->

                    <!--PRODUCT DISPLAY START -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="wrapper-product">
                            <section class="row-product">
                                <div class="container-item">
                                    <div class="item-sproduct">
                                        <img src="<?php echo base_url()?>img/salwar-1.jpg">
                                        <div class="item-overlay">
                                        </div>
                                        <div class="item-content">
                                            <div class="item-top-content">
                                                <div class="item-top-content-inner">
                                                    <div class="item-product">

                                                        <p class="product-short-des">Alluring Black & Off white</p>
                                                        <span class="price-h2">$100</span>

                                                    </div>

                                                </div>	
                                            </div>
                                            <div class="item-add-content">
                                                <div class="item-add-content-inner">
                                                    <!-- <div class="section">
                                                            <h4>Sizes</h4>
                                                            <p>40,41,42,43,44,45</p>
                                                    </div> -->
                                                    <div class="section">

                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i> 
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wish List" id="tooltip1">
                                                            <i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" id="tooltip1">
                                                            <i class="fa fa-refresh"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Details" id="tooltip1">
                                                            <i class="fa fa-caret-square-o-right"></i> 
                                                        </button>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </section>
                        </div>
                    </div>    <!--PRODUCT DISPLAY END -->

                    <!--PRODUCT DISPLAY START -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="wrapper-product">
                            <section class="row-product">
                                <div class="container-item">
                                    <div class="item-sproduct">
                                        <img src="<?php echo base_url()?>img/salwar-1.jpg">
                                        <div class="item-overlay">

                                         
                                        </div>
                                        <div class="item-content">
                                            <div class="item-top-content">
                                                <div class="item-top-content-inner">
                                                    <div class="item-product">

                                                        <p class="product-short-des">Alluring Black & Off white</p>
                                                        <span class="price-h2">$100</span>

                                                    </div>

                                                </div>	
                                            </div>
                                            <div class="item-add-content">
                                                <div class="item-add-content-inner">
                                                    <!-- <div class="section">
                                                            <h4>Sizes</h4>
                                                            <p>40,41,42,43,44,45</p>
                                                    </div> -->
                                                    <div class="section">

                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i> 
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wish List" id="tooltip1">
                                                            <i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" id="tooltip1">
                                                            <i class="fa fa-refresh"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Details" id="tooltip1">
                                                            <i class="fa fa-caret-square-o-right"></i> 
                                                        </button>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </section>
                        </div>
                    </div>    <!--PRODUCT DISPLAY END -->
                    <!--PRODUCT DISPLAY START -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="wrapper-product">
                            <section class="row-product">
                                <div class="container-item">
                                    <div class="item-sproduct">
                                        <img src="<?php echo base_url()?>img/salwar-1.jpg">
                                        <div class="item-overlay">

                                         
                                        </div>
                                        <div class="item-content">
                                            <div class="item-top-content">
                                                <div class="item-top-content-inner">
                                                    <div class="item-product">

                                                        <p class="product-short-des">Alluring Black & Off white</p>
                                                        <span class="price-h2">$100</span>

                                                    </div>

                                                </div>	
                                            </div>
                                            <div class="item-add-content">
                                                <div class="item-add-content-inner">
                                                    <!-- <div class="section">
                                                            <h4>Sizes</h4>
                                                            <p>40,41,42,43,44,45</p>
                                                    </div> -->
                                                    <div class="section">

                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i> 
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wish List" id="tooltip1">
                                                            <i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" id="tooltip1">
                                                            <i class="fa fa-refresh"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Details" id="tooltip1">
                                                            <i class="fa fa-caret-square-o-right"></i> 
                                                        </button>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </section>
                        </div>
                    </div>    <!--PRODUCT DISPLAY END -->

                  

                </div><!--ROW END -->



                <!-- SALE PRODUCT -->

                <div class="row">
                    <div class="col-md-12">
                        <h1>Best Selling</h1>
                    </div>
                    <br><br>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">


                        <!--PRODUCT DISPLAY START -->

                        <div class="wrapper-product">
                            <section class="row-product">
                                <div class="container-item">
                                    <div class="item-sproduct">
                                        <img src="<?php echo base_url()?>img/salwar-1.jpg">
                                        <div class="item-overlay">

                                        
                                        </div>
                                        <div class="item-content">
                                            <div class="item-top-content">
                                                <div class="item-top-content-inner">
                                                    <div class="item-product">

                                                        <p class="product-short-des">Alluring Black & Off white</p>
                                                        <span class="price-h2-line">$120</span> <span class="price-h2">$100</span>

                                                    </div>

                                                </div>	
                                            </div>
                                            <div class="item-add-content">
                                                <div class="item-add-content-inner">
                                                    <!-- <div class="section">
                                                            <h4>Sizes</h4>
                                                            <p>40,41,42,43,44,45</p>
                                                    </div> -->
                                                    <div class="section">

                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i> 
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wish List" id="tooltip1">
                                                            <i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" id="tooltip1">
                                                            <i class="fa fa-refresh"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Details" id="tooltip1">
                                                            <i class="fa fa-caret-square-o-right"></i> 
                                                        </button>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </section>
                        </div>

                        <!--PRODUCT DISPLAY END -->
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">


                        <!--PRODUCT DISPLAY START -->

                        <div class="wrapper-product">
                            <section class="row-product">
                                <div class="container-item">
                                    <div class="item-sproduct">
                                        <img src="<?php echo base_url()?>img/salwar-1.jpg">
                                        <div class="item-overlay">

                                         
                                        </div>
                                        <div class="item-content">
                                            <div class="item-top-content">
                                                <div class="item-top-content-inner">
                                                    <div class="item-product">

                                                        <p class="product-short-des">Alluring Black & Off white</p>
                                                        <span class="price-h2-line">$120</span> <span class="price-h2">$100</span>

                                                    </div>

                                                </div>	
                                            </div>
                                            <div class="item-add-content">
                                                <div class="item-add-content-inner">
                                                    <!-- <div class="section">
                                                            <h4>Sizes</h4>
                                                            <p>40,41,42,43,44,45</p>
                                                    </div> -->
                                                    <div class="section">

                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i> 
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wish List" id="tooltip1">
                                                            <i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" id="tooltip1">
                                                            <i class="fa fa-refresh"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Details" id="tooltip1">
                                                            <i class="fa fa-caret-square-o-right"></i> 
                                                        </button>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </section>
                        </div>

                        <!--PRODUCT DISPLAY END -->
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">


                        <!--PRODUCT DISPLAY START -->

                        <div class="wrapper-product">
                            <section class="row-product">
                                <div class="container-item">
                                    <div class="item-sproduct">
                                        <img src="<?php echo base_url()?>img/salwar-1.jpg">
                                        <div class="item-overlay">

                                       
                                        </div>
                                        <div class="item-content">
                                            <div class="item-top-content">
                                                <div class="item-top-content-inner">
                                                    <div class="item-product">

                                                        <p class="product-short-des">Alluring Black & Off white</p>
                                                        <span class="price-h2-line">$120</span> <span class="price-h2">$100</span>

                                                    </div>

                                                </div>	
                                            </div>
                                            <div class="item-add-content">
                                                <div class="item-add-content-inner">
                                                    <!-- <div class="section">
                                                            <h4>Sizes</h4>
                                                            <p>40,41,42,43,44,45</p>
                                                    </div> -->
                                                    <div class="section">

                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i> 
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wish List" id="tooltip1">
                                                            <i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" id="tooltip1">
                                                            <i class="fa fa-refresh"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Details" id="tooltip1">
                                                            <i class="fa fa-caret-square-o-right"></i> 
                                                        </button>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </section>
                        </div>

                        <!--PRODUCT DISPLAY END -->
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">


                        <!--PRODUCT DISPLAY START -->

                        <div class="wrapper-product">
                            <section class="row-product">
                                <div class="container-item">
                                    <div class="item-sproduct">
                                        <img src="<?php echo base_url()?>img/salwar-1.jpg">
                                        <div class="item-overlay">

                                        
                                        </div>
                                        <div class="item-content">
                                            <div class="item-top-content">
                                                <div class="item-top-content-inner">
                                                    <div class="item-product">

                                                        <p class="product-short-des">Alluring Black & Off white</p>
                                                        <span class="price-h2-line">$120</span> <span class="price-h2">$100</span>

                                                    </div>

                                                </div>	
                                            </div>
                                            <div class="item-add-content">
                                                <div class="item-add-content-inner">
                                                    <!-- <div class="section">
                                                            <h4>Sizes</h4>
                                                            <p>40,41,42,43,44,45</p>
                                                    </div> -->
                                                    <div class="section">

                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i> 
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wish List" id="tooltip1">
                                                            <i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" id="tooltip1">
                                                            <i class="fa fa-refresh"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Details" id="tooltip1">
                                                            <i class="fa fa-caret-square-o-right"></i> 
                                                        </button>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            </section>
                        </div>

                        <!--PRODUCT DISPLAY END -->
                    </div>
                </div>