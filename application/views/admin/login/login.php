<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to Musallah.com || Login-Panel </title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>include/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>include/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url(); ?>include/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="<?php echo base_url(); ?>include/admin/vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo base_url(); ?>include/admin/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form action="<?php echo base_url(); ?>Admin/admin-login" method="POST">
                            <h1>Login to Dashboard</h1>
                            <div>
                                <input type="email" class="form-control" name="adminmail" placeholder="Useremail" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" name="adminpassword" placeholder="Password" required="" />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default submit" >Log in</button>
                                <a class="reset_pass" href="javascript:void(0)">Lost your password?</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">New to site?
                                    <a href="#signup" class="to_register"> Create Account </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-paw"></i> Musallah.com</h1>
                                    <p>©2016 All Rights Reserved & Developed by <a href="http://www.cloudnextbd.com" target="_blank">Cloudnextbd.com</a>. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>

                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <form action="<?php echo base_url(); ?>Admin/admin-register" method="POST">
                            <h1>Register new Account</h1>
                            <div>
                                <input type="text" class="form-control" name="adminname" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="email" class="form-control" name="adminmail" placeholder="Email" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" name="adminpass" placeholder="Password" required="" />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default submit">Register</button>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">Already a member ?
                                    <a href="#signin" class="to_register"> Log in </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-paw"></i> Musallah.com</h1>
                                    <p>©2016 All Rights Reserved & Developed by <a href="http://www.cloudnextbd.com" target="_blank">Cloudnextbd.com</a>. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>
