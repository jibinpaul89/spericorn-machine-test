<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Spericorn: Register With Us </title>

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
<body style="background-color: antiquewhite;">



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row" style="justify-content: center!important;">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Register With Us</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form id="regform" role="form" action="" method="post">
                                            <div class="row" >
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Name<span class="text-danger">*</span></label>
                                                        <input id="name" class="form-control" type="text" placeholder="Name" name="name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email<span class="text-danger">*</span></label>
                                                        <input id="email" class="form-control" type="email" placeholder="Email" name="email" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="password" placeholder="Pasword" id="password" name="password"  required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Confirm Password<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="password" placeholder="Confirm Pasword" id="con_password" name="con_password"  required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address<span class="text-danger">*</span></label>
                                                        <textarea id="address" name="address" class="form-control" rows="3" placeholder="Address" required></textarea>
                                                    </div>

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




                                                    <input type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" value="Register" id="submit" name="submit">

                                                    <div class="form-group">
                                                        <label>Have you already registered? <a href="<?php echo base_url(); ?>userlogin/login" ><font color="green"> Click Here! </font></a> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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

<script type="text/javascript">

$(document).ready(function() {

  //form Submit
  $("form").submit(function(evt){

     evt.preventDefault();
     var formData = new FormData($(this)[0]);
  $.ajax({
      url: '<?php echo base_url(); ?>'+'registration/registration_process',
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
          document.getElementById("regform").reset();
          $("#success").html("Your Registration process has been completed.You can only login to the system after admin verification.");
          $(".successdiv").show();
          $(".successdiv").fadeOut(9000);

        }else {
          $("#error").html(resresult[1]);
          $(".errordiv").show();

          $(".errordiv").fadeOut(9000);

        }
      }
  });
  return false;
  });

});


</script>
