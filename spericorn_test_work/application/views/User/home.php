<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Spericorn : User Home</title>

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
    <link href="<?php echo base_url(); ?>assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/lib/helper.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index.html"><!-- <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" /> --><span>Spericorn</span></a></div>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>user/home"><i class="ti-calendar"></i> Home </a></li>
                        <li><a href="<?php echo base_url(); ?>user/edit"><i class="ti-calendar"></i> Edit Profile</a></li>
                        <li><a href="<?php echo base_url(); ?>user/profileimage"><i class="ti-calendar"></i> Profile Image </a></li>
                        <li><a href="<?php echo base_url(); ?>userlogin/logout"><i class="ti-calendar"></i> Logout </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                  Welcome
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>





    <div class="content-wrap">
      <div class="main">
        <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 p-r-0 title-margin-right">
                <div class="page-header">
                    <div class="page-title">
                        <div style="width: 50%;float: left;"><h1>Profile</h1></div><div style="width: 50%;float: right;text-align: right;"><a href="<?php echo base_url();?>user/edit" class="btn btn-primary btn-flat m-b-30 m-t-30">EDIT</a></div>
                    </div>
                </div>
            </div>
          </div>


          <div class="row" style="min-height: 400px;">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="current-progress">
                              <div class="progress-content">
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <div class="progress-text">Name</div>
                                      </div>
                                      <div class="col-lg-8">
                                          <div class="current-progressbar">
                                            : <?php echo $user_details['name'];   ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="progress-content">
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <div class="progress-text">Email</div>
                                      </div>
                                      <div class="col-lg-8">
                                          <div class="current-progressbar">
                                            : <?php echo $user_details['email'];   ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="progress-content">
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <div class="progress-text">Address</div>
                                      </div>
                                      <div class="col-lg-8">
                                          <div class="current-progressbar">
                                            : <?php echo $user_details['address'];   ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="progress-content">
                                  <div class="row">
                                      <div class="col-lg-4">
                                          <div class="progress-text">Profile Image</div>
                                      </div>
                                      <div class="col-lg-8">
                                          <div class="current-progressbar">
                                            : <img onerror="this.onerror=null; this.src='<?php echo base_url(); ?>uploads/users/default.png'" src="<?php echo base_url() ?>uploads/users/<?php echo $user_details['image'];   ?>" width="120" height="120">
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>

              </div>

              <div class="row">
                  <div class="col-lg-12">
                    <div class="footer">
                       <?php echo "copyright@2020-abc enterprises"; ?>
                    </div>
                  </div>
             </div>

         </div>
        </div>
      </div>


    <!-- jquery vendor -->
    <script src="<?php echo base_url(); ?>assets/js/lib/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="<?php echo base_url(); ?>assets/js/lib/menubar/sidebar.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <!-- bootstrap -->
    <script src="<?php echo base_url(); ?>assets/js/lib/bootstrap.min.js"></script><script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <!-- scripit init-->
</body>
</html>
