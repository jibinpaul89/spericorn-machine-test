<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User: Login</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="<?php echo base_url();?>assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/lib/helper.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <!--   for removing error div    -->
    <script src="<?php echo base_url();?>assets/js/lib/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="bg-primary" style="background-color: antiquewhite;">
    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-form">
                            <h4>User Login</h4>
                              <?php if($login_error!=""){  ?>
                                <div class="alert alert-danger alert-dismissible fade show errordiv" style="color:white;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <strong >Invalid login!</strong> <?php echo $login_error; ?>
                                </div>
                              <?php } ?>
                            <form  action="<?php echo base_url().'userlogin/login';?>" method="post">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                </div>
                                <div class="g-recaptcha"  data-sitekey="6LeYG5wUAAAAAHd79EkZ6TiHFl3Hsdwno_Ino1mn"></div>
                                  <span style="color:#dc3545!important;">
                                    <?php echo form_error('g-recaptcha-response');?>
                                  </span>
                                <input type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" value="submit" id="submit" name="submit">

                                <div class="form-group">
                                    <label>New User?<a href="<?php echo base_url(); ?>registration/register" ><font color="green"> Register Now! </font></a></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<style>
p{
color: red;
}

.bg-primary {
    background-color: antiquewhite !important;
}
</style>
<script type="text/javascript">
$( document ).ready(function() {
    $(".errordiv").fadeOut(5000);
});
</script>
