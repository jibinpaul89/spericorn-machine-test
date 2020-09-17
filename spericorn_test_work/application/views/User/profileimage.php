<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Spericorn : Profile Image</title>

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
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Spericon</title>

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
                          <div class="col-lg-8 p-r-0 title-margin-right">
                              <div class="page-header">
                                  <div class="page-title">
                                      <h1>Profile Image</h1>
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
            <div class="col-lg-12 ">
            <div class="alert alert-danger alert-dismissible fade show errordiv" style="display:none;">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong><span id="error">Failed!</span></strong>
            </div>
            <div class="alert alert-primary alert-dismissible fade show successdiv" style="display:none;">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong><span id="success">Success!</span></strong>
            </div>
          </div>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <!-- /# row -->
                <section id="main-content">
                    <!-- /# row -->
                    <div class="row" style="min-height: 400px;">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form role="form" action="" method="post" enctype='multipart/form-data'>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                  <div class="form-group row"  align="left">
                                                    <label class="col-lg-4 col-form-label" >Choose Profile Image<span class="text-danger">*</span></label>
                                                      <div class="col-lg-5">
                                                        <input type="file" name="file" id="file">

                                                        <div><strong style="color:red;" style="font-size:20;"><?php echo form_error('offices');?></strong></div>

                                                      </div>
                                                    </div>
                                                    <input type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" value="Change Image" id="submit" name="submit">
                                                </div>

                                                <div class="col-lg-4">
                                                  <div class="form-group row"  align="left" id="imgdiv">
                                                      <img onerror="this.onerror=null; this.src='<?php echo base_url(); ?>uploads/users/default.png'" src="<?php echo base_url() ?>uploads/users/<?php echo $user_details['image']; ?>" width="120" height="120">
                                                  </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>
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
    <script src="<?php echo base_url(); ?>assets/js/lib/bootstrap.min.js"></script><script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    <!-- scripit init-->


</body>
</html>

<script type="text/javascript">

$(document).ready(function() {

  //form Submit
  $("form").submit(function(evt){
     evt.preventDefault();
     var formData = new FormData($(this)[0]);
  $.ajax({
      url: '<?php echo base_url(); ?>'+'user/profilechange_process',
      type: 'POST',
      data: formData,
      async: false,
      cache: false,
      contentType: false,
      enctype: 'multipart/form-data',
      processData: false,
      success: function (response) {
        response=response.trim();
        var resresult=response.split("@@##@@");
        if(resresult[0]==1)
        {
          $("#success").html("Your profile image has been updated successfully.");
          $(".successdiv").show();

          var imgstr='<img src="<?php echo base_url() ?>uploads/users/'+resresult[1]+'" width="120" height="120">'
          $('#imgdiv').html(imgstr);

          $(".successdiv").fadeOut(5000);
        }else {
          $("#error").html(resresult[1]);
          $(".errordiv").show();
          $(".errordiv").fadeOut(5000);
        }

      }
  });
  return false;
  });
});

</script>
