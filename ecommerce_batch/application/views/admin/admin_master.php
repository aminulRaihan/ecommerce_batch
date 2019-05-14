<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


        <title><?php echo $title; ?></title>


        <link rel="stylesheet" href="<?php echo base_url() ?>js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/font-icons/font-awesome/css/font-awesome.min.css"  id="style-resource-2">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/ecommerce.css"  id="style-resource-5">
        <script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url() ?>js/jsval.js"></script>
        <script src="<?php echo base_url(); ?>js/country.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            function checkDelete()
            {
                var chk=confirm('Are You Sure To Delete This ?');
                if(chk)
                {
                    return true;  
                }
                else{
                    return false;
                }
            }
            
        </script>


    </head>
    <body class="page-body page-fade">

        <!-- ====================== END ======================================= -->

        <div class="page-container">	

            <div class="sidebar-menu">

                <header class="logo-env">

                    <!-- logo -->
                    <div class="logo">
                        <a href="index.html">
                            <img src="<?php echo base_url() ?>img/logo-admin.png" alt="" />
                        </a>
                    </div>

                    <!-- logo collapse icon -->
                    <div class="sidebar-collapse">
                        <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>


                    <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                    <div class="sidebar-mobile-menu visible-xs">
                        <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>

                </header>


                <ul id="main-menu" class="">
                    <li id="search">
                        <form method="get" action="#">
                            <input type="text" name="q" class="search-input" placeholder="Search something..." />
                            <button type="submit"><i class="entypo-search"></i></button>
                        </form>
                    </li>
                    <li class="opened active">
                        <a href="<?php echo base_url() ?>super_admin"><i class="entypo-gauge"></i><span>Dashboard</span></a>
                    </li>

                    <li>
                        <a href="#"><i class="entypo-user"></i><span>User</span></a>
                        <ul>
                            <li>
                                <a href="<?php echo base_url() ?>super_admin/add_user"><i class="entypo-user-add"></i><span>Add User</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>super_admin/manage_user"><i class="entypo-users"></i><span>Manage Users</span></a>
                            </li>


                        </ul>

                    </li>

                    <li>
                        <a href="#"><i class="fa fa-truck"></i><span>Manufacturer</span></a>
                        <ul>
                            <li>
                                <a href="<?php echo base_url() ?>super_admin/add_manufacture"><i class="entypo-list"></i><span>Add Manufacturer</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>super_admin/manage_manufacture"><i class="fa fa-pencil-square-o"></i><span>Manage Manufacturer</span></a>
                            </li>


                        </ul>

                    </li>

                    <li>
                        <a href="#"><i class="entypo-newspaper"></i><span>Product Manager</span></a>
                        <ul>
                            <li>
                                <a href="<?php echo base_url() ?>super_admin/add_category"><i class="entypo-list"></i><span>Add Category</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>super_admin/manage_category"><i class="fa fa-pencil-square-o"></i><span>Manage Category</span></a>
                            </li>

                            <li>
                                <a href="<?php echo base_url() ?>super_admin/add_product"><i class="fa fa-file-text"></i><span>Add Product</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>super_admin/manage_product"><i class="fa fa-pencil-square-o"></i><span>Manage Product</span></a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a href="#"><i class="entypo-newspaper"></i><span>Order Manager</span></a>
                        <ul>
                            <li>
                                <a href="<?php echo base_url() ?>super_admin/manage_order"><i class="entypo-list"></i><span>Manage Order</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>super_admin/piechart_report"><i class="fa fa-pencil-square-o"></i><span>Order Report</span></a>
                            </li>

                            <li>
                                <a href="<?php echo base_url() ?>super_admin/barchart_report"><i class="fa fa-file-text"></i><span>Bar Chart Report</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>super_admin/manage_product"><i class="fa fa-pencil-square-o"></i><span>Customer Report</span></a>
                            </li>
                        </ul>

                    </li>

                </ul>


            </div>	
            <div class="main-content">

                <div class="row">

                    <!-- Profile Info and Notifications -->
                    <div class="col-md-6 col-sm-8 clearfix">

                        <ul class="user-info pull-left pull-none-xsm">

                            <!-- Profile Info -->
                            <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url() ?>images/thumb-1.png" alt="" class="img-circle" />
                                    <?php echo $this->session->userdata('admin_name') ?>
                                </a>

                                <ul class="dropdown-menu">

                                    <!-- Reverse Caret -->
                                    <li class="caret"></li>

                                    <!-- Profile sub-links -->
                                    <li>
                                        <a href="#">
                                            <i class="entypo-user"></i>
                                            Edit Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a href="../neon-x/mailbox/main/index.html">
                                            <i class="entypo-mail"></i>
                                            Inbox
                                        </a>
                                    </li>

                                    <li>
                                        <a href="../neon-x/extra/calendar/index.html">
                                            <i class="entypo-calendar"></i>
                                            Calendar
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="entypo-clipboard"></i>
                                            Tasks
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                        <ul class="user-info pull-left pull-right-xs pull-none-xsm">

                            <!-- Raw Notifications -->
                            <li class="notifications dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="entypo-attention"></i>
                                    <span class="badge badge-info">6</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="top">
                                        <p class="small">
                                            <a href="#" class="pull-right">Mark all Read</a>
                                            You have <strong>3</strong> new notifications.
                                        </p>
                                    </li>

                                    <li>
                                        <ul class="dropdown-menu-list scroller">
                                            <li class="unread notification-success">
                                                <a href="#">
                                                    <i class="entypo-user-add pull-right"></i>

                                                    <span class="line">
                                                        <strong>New user registered</strong>
                                                    </span>

                                                    <span class="line small">
                                                        30 seconds ago
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="unread notification-secondary">
                                                <a href="#">
                                                    <i class="entypo-heart pull-right"></i>

                                                    <span class="line">
                                                        <strong>Someone special liked this</strong>
                                                    </span>

                                                    <span class="line small">
                                                        2 minutes ago
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="notification-primary">
                                                <a href="#">
                                                    <i class="entypo-user pull-right"></i>

                                                    <span class="line">
                                                        <strong>Privacy settings have been changed</strong>
                                                    </span>

                                                    <span class="line small">
                                                        3 hours ago
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="notification-danger">
                                                <a href="#">
                                                    <i class="entypo-cancel-circled pull-right"></i>

                                                    <span class="line">
                                                        John cancelled the event
                                                    </span>

                                                    <span class="line small">
                                                        9 hours ago
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="notification-info">
                                                <a href="#">
                                                    <i class="entypo-info pull-right"></i>

                                                    <span class="line">
                                                        The server is status is stable
                                                    </span>

                                                    <span class="line small">
                                                        yesterday at 10:30am
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="notification-warning">
                                                <a href="#">
                                                    <i class="entypo-rss pull-right"></i>

                                                    <span class="line">
                                                        New comments waiting approval
                                                    </span>

                                                    <span class="line small">
                                                        last week
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="external">
                                        <a href="#">View all notifications</a>
                                    </li>				</ul>

                            </li>

                            <!-- Message Notifications -->
                            <li class="notifications dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="entypo-mail"></i>
                                    <span class="badge badge-secondary">10</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <ul class="dropdown-menu-list scroller">
                                            <li class="active">
                                                <a href="#">
                                                    <span class="image pull-right">
                                                        <img src="images/thumb-1.png" alt="" class="img-circle" />
                                                    </span>

                                                    <span class="line">
                                                        <strong>Luc Chartier</strong>
                                                        - yesterday
                                                    </span>

                                                    <span class="line desc small">
                                                        This ain’t our first item, it is the best of the rest.
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="active">
                                                <a href="#">
                                                    <span class="image pull-right">
                                                        <img src="images/thumb-2.png" alt="" class="img-circle" />
                                                    </span>

                                                    <span class="line">
                                                        <strong>Salma Nyberg..</strong>
                                                        - 2 days ago
                                                    </span>

                                                    <span class="line desc small">
                                                        Oh he decisively impression attachment friendship so if everything. 
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <span class="image pull-right">
                                                        <img src="images/thumb-3.png" alt="" class="img-circle" />
                                                    </span>

                                                    <span class="line">
                                                        Hayden Cartwright
                                                        - a week ago
                                                    </span>

                                                    <span class="line desc small">
                                                        Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <span class="image pull-right">
                                                        <img src="images/thumb-4.png" alt="" class="img-circle" />
                                                    </span>

                                                    <span class="line">
                                                        Sandra Eberhardt
                                                        - 16 days ago
                                                    </span>

                                                    <span class="line desc small">
                                                        On so attention necessary at by provision otherwise existence direction.
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="external">
                                        <a href="../neon-x/mailbox/main/index.html">All Messages</a>
                                    </li>				</ul>

                            </li>


                        </ul>

                    </div>


                    <!-- Raw Links -->
                    <div class="col-md-6 col-sm-4 clearfix hidden-xs">

                        <ul class="list-inline links-list pull-right">
                            <li>
                                <a href="<?php echo base_url() ?>super_admin/logout">
                                    Log Out <i class="entypo-logout right"></i>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
                <!-- ====================== END ======================================= -->
                <hr />
                <!--CONTENT GOES HERE -->
                <?php echo $admin_content; ?>

                <br />
                <br />


                <!-- Footer -->
                <footer class="main">



                    &copy; 2019 <strong>IT 2 Resource </strong> Admin Theme by <a href="http://vatranet.com/" target="_blank">Vatranet.com</a>

                </footer>	</div>







            <link rel="stylesheet" href="<?php echo base_url() ?>js/wysihtml5/bootstrap-wysihtml5.css"  id="style-resource-1">


            <script src="<?php echo base_url() ?>js/neon-mail.js" id="script-resource-7"></script>
            <script src="<?php echo base_url() ?>js/main-gsap.js" id="script-resource-1"></script>
            <script src="<?php echo base_url() ?>js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
            <script src="<?php echo base_url() ?>js/bootstrap.min.js" id="script-resource-3"></script>
            <script src="<?php echo base_url() ?>js/joinable.js" id="script-resource-4"></script>
            <script src="<?php echo base_url() ?>js/resizeable.js" id="script-resource-5"></script>
            <script src="<?php echo base_url() ?>js/neon-chat.js" id="script-resource-15"></script>
            <script src="<?php echo base_url() ?>js/neon-custom.js" id="script-resource-16"></script>
            <script src="<?php echo base_url() ?>js/neon-api.js" id="script-resource-6"></script>
            <script src="<?php echo base_url() ?>js/wysihtml5/wysihtml5-0.4.0pre.min.js" id="script-resource-7"></script>
            <script src="<?php echo base_url() ?>js/wysihtml5/bootstrap-wysihtml5.js" id="script-resource-8"></script>

            <script src="<?php echo base_url() ?>js/fileinput.js" id="script-resource-7"></script>
            <script src="<?php echo base_url() ?>js/bootstrap-datepicker.js" id="script-resource-11"></script>


    </body>
</html>