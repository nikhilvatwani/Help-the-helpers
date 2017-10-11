<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php include "volunteerlinks_upper.php"; ?>
  <script type="text/javascript">
    function reject(ref){
      var val = $(ref).parent().parent();      
      $(val).fadeOut();
    }
    function accept(ref){
      var val = $(ref).parent().parent();      
      $(val).fadeOut();
      $("#upcoming_events").append('<div class="callout callout-info"><h4>Awareness campaign!</h4><p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar and the content will slightly differ than that of the normal layout.</p>');
      $("#pending_events").append('<div class="alert alert-success alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Invitation Accepted.</div>');
      
    }
  </script>
  <style type="text/css">
    body{
      padding:0;
    }
  </style>
</head>
<style>
.glyphicon-star { 
  color: #e67e22; 
}
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<script type="text/javascript">
  //alert("hi");
</script>
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
   </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    
	  
	  
    <div class="container">
      <div class="row">
        <h3>Make a Donation</h3>
        <iframe src="https://www.paypal.me/nikhilvatwani"  style="width:100%;height:50vh"></iframe>
      </div>
      <h4>--OR--</h4> 
      <a href="https://paypal.me/nikhilvatwani" class="btn btn-success"target="_blank">Make Payment</a>
      <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:70vw">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Receipt</h4>
        </div>
        <div class="modal-body" style="height:70vh;">
          <iframe src="../../library/EditableInvoice/index.php" style="height:100%;width:100%"></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
      </div>
    <h3>Previous Donation</h3>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Amount</th>
        <th>Generate Receipt</th>
        <
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>20000</td>
        <td><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Generate Receipt</button></td>
      </tr>
      <tr>
        <td>30000</td>
        <td><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Generate Receipt</button></td>        
      </tr>
      <tr>
        <td>40000</td>
        <td><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Generate Receipt</button></td>
      </tr>
    </tbody>
  </table>
  </div>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
  
<?php include "volunteerscripts_bottom.php";?>


</body>
</html>
