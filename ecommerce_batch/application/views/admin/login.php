<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


        <title>Admin Panel Login | Login</title>


        <link rel="stylesheet" href="<?php echo base_url() ?>css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
        <link rel="stylesheet" href="<?php echo base_url() ?>css/ecommerce.css"  id="style-resource-5">
        <script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="page-body login-page login-form-fall">

        <div class="login-container">

            <div class="login-header login-caret">

                <div class="login-content">

                    <a href="#" class="logo">
                        <img src="<?php echo base_url(); ?>images/logo.png" alt="" />
                    </a>

                    <p class="description">Dear user, log in to access the admin area!</p>

                    <!-- progress bar indicator -->
                    <div class="login-progressbar-indicator">
                        <h3>43%</h3>
                        <span>logging in...</span>
                    </div>
                </div>

            </div>

            <div class="login-progressbar">
                <div></div>
            </div>

            <div class="login-form">

                <div class="login-content">
                    <!--EXCEPTION MESSAGE-->
                    <?php
                    $exception = $this->session->userdata('exception');
                    if ($exception) {
                        ?> 
                        <div class="alert alert-danger">
                            <strong> <span class="glyphicon glyphicon-remove-sign"></span>&nbsp;</strong>
                            <?php echo $exception; ?>
                        </div>

                        <?php
                        $this->session->unset_userdata('exception');
                    }
                    ?>
                    <!--EXCEPTION MESSAGE END-->
                    <!--LOGOUT MESSAGE-->
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
                    

                    <form method="post" role="form" action="<?php echo base_url(); ?>admin_login/check_login">

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-user"></i>
                                </div>

                                <input type="text" class="form-control" name="admin_email" id="username" placeholder="Username" autocomplete="off" />
                            </div>

                        </div>

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="entypo-key"></i>
                                </div>

                                <input type="password" class="form-control" name="admin_password" id="password" placeholder="Password" autocomplete="off" />
                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-login">
                                Login In
                                <i class="entypo-login"></i>
                            </button>
                        </div>

                    </form>


                    <div class="login-bottom-links">

                        <a href="#" class="link">Forgot your password?</a>

                        <br />



                    </div>

                </div>

            </div>

        </div>

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
        <script src="<?php echo base_url() ?>js/jquery.validate.min.js" id="script-resource-7"></script>
        <script src="<?php echo base_url() ?>js/neon-login.js" id="script-resource-8"></script>




    </body>
</html>