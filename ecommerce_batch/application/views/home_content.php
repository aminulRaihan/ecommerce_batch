<div class="row">
    <div class="col-md-12">
        <h1>Latest Product</h1>
    </div>
    <br><br>
</div>


<div class="row">
    <?php
    foreach ($all_published_product as $product) {
        ?>
        <!--PRODUCT DISPLAY START -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrapper-product">
                <section class="row-product">
                    <div class="container-item">
                        <div class="item-sproduct">
                            <img width="250" height="300" src="<?php echo base_url() . $product->product_image ?>">
                            <div class="item-overlay">
                                <?php
                                $today = strtotime(date("Y-m-d"));
                                $start_date = strtotime($product->date_start);
                                $end_date = strtotime($product->date_end);
                                if ((($today >= $start_date) && ($today <= $end_date))) {
                                    ?>
                                    
                                    <div class="sale-tag"><span>SALE</span></div>
                                    <?php
                                } else {
                                    ?>
                                    <div class="new-tag"><span>NEW</span></div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="item-content">
                                <div class="item-top-content">
                                    <div class="item-top-content-inner">
                                        <div class="item-product">

                                            <p class="product-short-des"><?php echo mb_substr($product->product_name, 0, 25); ?></p>

                                            <?php
                                            if ($product->product_special_price) {
                                                ?>
                                                <span class="price-h2-line"><?php echo $product->product_price ?></span> 
                                                <?php
                                            }
                                            ?>
                                            &nbsp;&nbsp;<span class="price-h2"><?php echo $product->product_special_price ?></span>
                                            <?php
                                            if ($product->product_special_price==NULL) {
                                                ?>
                                                <span class="price-h2"><?php echo $product->product_price ?></span> 
                                                <?php
                                            }
                                            ?>
                                            
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
                                            <button type="button" onClick="window.location.href='<?php echo base_url(); ?>welcome/product_details/<?php echo $product->product_id ?>'" class="btn btn-orange tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Product Details" id="tooltip1">
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
        <?php
    }
    ?>
</div>


<!-- SALE PRODUCT -->

<div class="row">
    <div class="col-md-12">
        <h1>Sale Product</h1>
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
                        <img src="img/salwar-1.jpg">
                        <div class="item-overlay">

                        </div>
                        <div class="item-content">
                            <div class="item-top-content">
                                <div class="item-top-content-inner">
                                    <div class="item-product">

                                        <p class="product-short-des">Neque porro quisquam est qui doloreme</p>
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
                        <img src="img/salwar-1.jpg">
                        <div class="item-overlay">

                        </div>
                        <div class="item-content">
                            <div class="item-top-content">
                                <div class="item-top-content-inner">
                                    <div class="item-product">

                                        <p class="product-short-des">Neque porro quisquam est qui dolorem</p>
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
                        <img src="img/salwar-1.jpg">
                        <div class="item-overlay">

                        </div>
                        <div class="item-content">
                            <div class="item-top-content">
                                <div class="item-top-content-inner">
                                    <div class="item-product">

                                        <p class="product-short-des">Neque porro quisquam est qui dolorem</p>
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
                        <img src="img/salwar-1.jpg">
                        <div class="item-overlay">
>
                        </div>
                        <div class="item-content">
                            <div class="item-top-content">
                                <div class="item-top-content-inner">
                                    <div class="item-product">

                                        <p class="product-short-des">Neque porro quisquam est qui dolorem</p>
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