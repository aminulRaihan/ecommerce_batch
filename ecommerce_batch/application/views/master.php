<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/ecommerce.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/myCustomStyle.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/blueimp-gallery.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-icons/font-awesome/css/font-awesome.min.css"  id="style-resource-2">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-image-gallery.min.css">
        <script src="<?php echo base_url(); ?>js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url(); ?>js/holder.js"></script>
        <script src="<?php echo base_url(); ?>js/ajax_utility.js"></script>
        <script src="<?php echo base_url(); ?>js/country.js"></script>
    </head>
    <body>


       <div class="wrap_top_menu">
            <div class="container">
                <div class="row">
                    <ul class="nav nav-pills">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                       <li><a href="#">Wish list(0)</a></li>
                        <li><a href="#">My Account</a></li>
                      <li><a href="#">Shopping Cart</a></li>
                        <li><a href="<?php echo base_url() ?>welcome/check_out">Check Out</a></li>
                    </ul>

                </div>
            </div> 
        </div>

        <div class="wrap_body">
            <div class="container">
                <div class="wrap_heading">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="<?php echo base_url(); ?>img/aura-collectionz-logo.jpg" alt="Aura Collectionz-logo">
                        </div>
                        <div class="col-md-3">
                            <h3 class="telephone">+8809612322019 </h3> 
                            <p>Call us Sunday - Thursday: 9:00 am - 6:00 pm </p>
                        </div>
                        <div class="col-md-4">
                            <?php
                                $customer_id=$this->session->userdata('customer_id');
                                if($customer_id !=NULL)
                                {
                            ?>
                            <p class="text-right">Welcome <?php echo $this->session->userdata('full_name');?> you can <a href="<?php echo base_url() ?>checkout/logout">Logout</a></p>
                                <?php }
                                 else {
                                ?>
                            <p class="text-right">Welcome visitor you can <a href="<?php echo base_url() ?>welcome/customer_login">login</a> or <a href="<?php echo base_url() ?>welcome/creat_account">create an account.</a></p>
                                 <?php } ?>
                            <div class="btn-group navbar-right">
                                    
                                <a href="<?php echo base_url();?>cart/show_cart">
                                
                                    <button type="button" class="btn btn-orange fa fa-shopping-cart">
                                        <?php echo $this->cart->total_items();?> item(s) - $<?php echo $this->cart->total();?> &nbsp;&nbsp; 
                                    </button>
                                </a>
                                <ul class="dropdown-menu right" role="menu">
                                    <li>
                                        <div class="row padding-left-1 padding-botom-1">
                                            <div class="col-md-2">
                                                <img src="<?php echo base_url(); ?>img/thumble.jpg">
                                            </div>
                                            <div class="col-md-5">
                                                <a href="#">Hues Atire 110007</a>
                                            </div>
                                            <div class="col-md-1">x1</div>
                                            <div class="col-md-4">$140.00 &nbsp; <a href="#"><i class="fa fa-times"></i></a></div>

                                        </div> 
                                        <div class="row padding-left-1 padding-botom-1">
                                            <div class="col-md-2">
                                                <img src="<?php echo base_url(); ?>img/thumble.jpg">
                                            </div>
                                            <div class="col-md-5">
                                                <a href="#">Sana Safinaz 115008</a>
                                            </div>
                                            <div class="col-md-1">x1</div>
                                            <div class="col-md-4">$100.00 &nbsp; <a href="#"><i class="fa fa-times"></i></a></div>

                                        </div>  
                                    </li>

                                    <li class="divider"></li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12 text-right padding-checkout">
                                                <p>Sub Total: $240.00</p>
                                                <p>Total: $200.00</p>
                                                <span><a href="#">View Cart</a>&nbsp;|&nbsp;<a href="<?php echo base_url() ?>welcome/check_out">Check Out</a></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrap_navbar">
                    <nav class="navbar navbar-inverse" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="#"class="dropdown-toggle" data-toggle="dropdown">Upcoming Product</a>
                                 <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                
                                </li>
                                <li><a href="#"class="dropdown-toggle" data-toggle="dropdown">Category</a>
                                 <ul class="dropdown-menu">
                                        <li><a href="#">Cars</a></li>
                                        <li><a href="#">Bus</li>
                                        <li><a href="#">Trucks</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">MotorCycles</a></li>
                                        <li class="divider"></li>
                                       <!-- <li><a href="#">One more separated link</a></li>-->
                                    </ul>
                                </li>
                                <li><a href="#"class="dropdown-toggle" data-toggle="dropdown">Manufacturer</a>
                                 <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicing<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> &nbsp;Search</button>
                            </form>

                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>


                <!-- Carousel
    ================================================== -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo base_url(); ?>img/slide-2.jpg" alt="First slide">

                        </div>

                        <div class="item">
                        <!--    <img src="<?php echo base_url(); ?>img/slide-1.jpg" alt="First slide">-->
                        </div>

                        <div class="item">
                            <img src="<?php echo base_url(); ?>img/slide-3.jpg" alt="First slide">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div><!-- /.carousel -->

                <!-- /.Main Body Start -->
                <?php echo $maincontent; ?>
                <!--Main Body Part END -->

                <div class="warp_about">
                    <div class="row">
                        <div class="col-md-8">

                            <h2>About US</h2>
                            Beizer Automobiles System is a leading automobile manufacturer with a portfolio that includes a wide range of cars, utility vehicles, trucks, buses and defence vehicles. 
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-5"><h2>Contact Us</h2></div> 
                                <div class="col-md-1 padding_top padding_right">
                                    <a href="#">  <div class="social"><i class="fa fa-facebook"></i></div> </a>
                                </div>
                                <div class="col-md-1 padding_top padding_right">
                                    <a href="#">  <div class="social"><i class="fa fa-twitter"></i></div> </a>
                                </div>
                                <div class="col-md-1 padding_top padding_right">
                                    <a href="#">  <div class="social"><i class="fa fa-youtube"></i></div> </a>
                                </div>
                            </div>

                            <p>Phone: +971566307858, +8801715006237</p>
                            <p>info@beizerautomobile.com</p>
                        </div>
                    </div>
                </div>

                <div class="warp_bottom">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="bottom_heading">INFORMATION</p>
                            <p class="bottom_para"><a href="#">About Us</a></p>
                            <p class="bottom_para"><a href="#">Shipping Policy</a></p>
                            <p class="bottom_para"><a href="#">Privacy Policy</a></p>
                            <p class="bottom_para"><a href="#">Terms & Conditions</a></p>
                            <p class="bottom_para"><a href="#">Return and Refund Policy</a></p>
                        </div>
                        <div class="col-md-3">
                            <p class="bottom_heading">CUSTOMER SERVICE</p>
                            <p class="bottom_para"><a href="#">Contact Us</a></p>
                            <p class="bottom_para"><a href="#">Returns</a></p>
                            <p class="bottom_para"><a href="#">Site Map</a></p>
                        </div>
                        <div class="col-md-3">
                            <p class="bottom_heading">EXTRAS</p>
                            <p class="bottom_para"><a href="#">Brands</a></p>
                            <p class="bottom_para"><a href="#">consectetur adipiscing elit </a></p>
                            <p class="bottom_para"><a href="#">Affiliates</a></p>
                            <p class="bottom_para"><a href="#">Specials</a></p>
                        </div>
                        <div class="col-md-3">
                            <p class="bottom_heading">MY ACCOUNT</p>
                            <p class="bottom_para"><a href="#">My Account</a></p>
                            <p class="bottom_para"><a href="#">Order History</a></p>
                            <p class="bottom_para"><a href="#">Wish List</a></p>
                            <p class="bottom_para"><a href="#">Newsletter</a></p>
                        </div>
                    </div>
                </div>

                <div class="wrap_footer">
                    <div class="row">
                        <div class="col-md-8">
                            <p>Powered By <a href="">Beizer Automobiles</a></p>
                            <p>Beizer Automobiles System� 2019</p>
                        </div>
                        <div class="col-md-4">
                            <img src="img/payment.png">
                        </div>
                    </div>
                </div>




            </div><!--WRAP CONTAINER END -->
        </div><!-- WRAP BODY END -->





        <script src="<?php echo base_url(); ?>js/bootstrap.min.js" id="script-resource-3"></script>
        <script src="<?php echo base_url(); ?>js/neon-custom.js" id="script-resource-3"></script>
        <script src="<?php echo base_url(); ?>js/main-gsap.js" ></script>
        <script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.minimal.min.js"></script>
        <script src="<?php echo base_url(); ?>js/joinable.js" id="script-resource-4"></script>
        <script src="<?php echo base_url(); ?>js/resizeable.js" id="script-resource-5"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap-image-gallery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.blueimp-gallery.min.js"></script>




    </body>
</html>
