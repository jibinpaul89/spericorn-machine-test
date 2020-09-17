<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Spericorn</title>

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
                        <li><a href="<?php echo base_url(); ?>admin/manage"><i class="ti-calendar"></i> Users </a></li>
                        <li><a href="<?php echo base_url(); ?>login/logout"><i class="ti-calendar"></i> Logout </a></li>
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
                                            <h1>Manage Users</h1>
                                        </div>
                                    </div>
                                </div>
                              </div>


            <div class="row" style="min-height: 420px;">
              <div class="col-lg-12">
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

          <div class="col-lg-12">
            <div class="card" >
              <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="10%">Sl.No.</th>
                                            <th width="10%">Name</th>
                                            <th width="10%">Email</th>
                                            <th width="10%">Address</th>
                                            <th width="10%">Image</th>
                                            <th width="10%">Status</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablecontent">

                                      <?php for($i=0;$i<count($userslist);$i++){ ?>
                                        <tr>
                                            <td><?php echo ($i+1); ?></td>
                                            <td><?php echo $userslist[$i]['name']; ?></td>
                                            <td><?php echo $userslist[$i]['email']; ?></td>
                                            <td><?php echo $userslist[$i]['address']; ?></td>
                                            <td><img height="80px" width="80px" onerror="this.onerror=null; this.src='<?php echo base_url(); ?>uploads/users/default.png'" src="<?php echo base_url(); ?>uploads/users/<?php echo $userslist[$i]['image']; ?>"></td>
                                            <td id="stat_<?php echo $userslist[$i]['id']; ?>"><?php if($userslist[$i]['status']==1){
                                              ?>
                                            <font color="green">Active</font>
                                            <?php
                                            }elseif ($userslist[$i]['status']==0) {

                                              ?><font color="chocolate">Pending</font>
                                              <?php


                                            }elseif ($userslist[$i]['status']==2) {
                                              ?><font color="red">Blocked</font><?php

                                            } ?> </td>
                                            <td id="act_<?php echo $userslist[$i]['id']; ?>">
                                            <?php if($userslist[$i]['status']==1){ ?>
                                              <a class="btn btn-primary btn-flat m-b-30 m-t-30" href="#" onclick="chengestatus(<?php echo $userslist[$i]['id'] ?>,2)">Block </a>
                                          <?php  }elseif ($userslist[$i]['status']==0) { ?>
                                            <a class="btn btn-primary btn-flat m-b-30 m-t-30" href="#" onclick="chengestatus(<?php echo $userslist[$i]['id'] ?>,1)">Activate</a><?php
                                          }elseif ($userslist[$i]['status']==2) { ?>
                                              <a class="btn btn-primary btn-flat m-b-30 m-t-30" href="#" onclick="chengestatus(<?php echo $userslist[$i]['id'] ?>,1)">Activate</a><?php
                                            } ?> </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>

                                </table>
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

    <script src="<?php echo base_url();?>assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/datatables-init.js"></script>





</body>
</html>

<script type="text/javascript">


function chengestatus(user_id,status)
{


  $.ajax({
		url: "<?php echo base_url("admin/changestatus/");?>"+user_id+"/"+status,
		type: "POST",
		cache: false,
		success: function(dataResult){
    response=dataResult.trim();

    var resresult=response.split("@@##@@");
    if(resresult[0]==1)
    {
      $("#success").html("Status has been updated successfully.");
      $(".successdiv").show();
      //$("#tablecontent").html(resresult[1]);
      if(status==1)
      {
        $("#stat_"+user_id).html('<font color="green">Active</font>');
        $("#act_"+user_id).html('<a class="btn btn-primary btn-flat m-b-30 m-t-30" href="#" onclick="chengestatus('+user_id+',2)">Block</a>');

      }
      else {
        $("#stat_"+user_id).html('<font color="red">Blocked</font>');
        $("#act_"+user_id).html('<a class="btn btn-primary btn-flat m-b-30 m-t-30" href="#" onclick="chengestatus('+user_id+',1)">Activate</a>');
      }

      $(".successdiv").fadeOut(5000);

    }else {
      $("#error").html(resresult[1]);
      $(".errordiv").show();
      $(".errordiv").fadeOut(5000);
    }
		}
	});


}




</script>
