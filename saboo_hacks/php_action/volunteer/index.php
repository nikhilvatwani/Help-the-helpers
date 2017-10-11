<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Volunteers | Dashboard</title>
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
      <span class="logo-lg"><b>Volunteer</b>Profile</span>
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
        <li class="active">
          <a href="../../../../chat_system/chatui.php" target="_blank">
            <i class="fa fa-dashboard"></i> <span>Chat with NGO</span>
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

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12">
          <div class="col-lg-3">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            <h3>Rajeev Yadav</h3>
            <main class="o-content">
  <div class="o-container">
    <div class="o-section">
      <div id="shop"></div>
    </div>
    
  </div>
</main>



<script src="../../library/5star/js/dist/rating.min.js"></script>
<script>

  /**
   * Demo in action!
   */
  (function() {

    'use strict';

    // SHOP ELEMENT
    var shop = document.querySelector('#shop');

    // DUMMY DATA
    var data = [
      {
        title: "Dope Hat",
        description: "Dope hat dolor sit amet, consectetur adipisicing elit. Commodi consectetur similique ullam natus ut debitis praesentium.",
        rating: 3
      },
      
    ];

    // INITIALIZE
    (function init() {
      for (var i = 0; i < data.length; i++) {
        addRatingWidget(buildShopItem(data[i]), data[i]);
      }
    })();

    // BUILD SHOP ITEM
    function buildShopItem(data) {
      var shopItem = document.createElement('div');

      var html = 
        '<div class="c-shop-item__details">' +
          '<ul class="c-rating"></ul>' +
        '</div>';

      shopItem.classList.add('c-shop-item');
      shopItem.innerHTML = html;
      shop.appendChild(shopItem);

      return shopItem;
    }

    // ADD RATING WIDGET
    function addRatingWidget(shopItem, data) {
      var ratingElement = shopItem.querySelector('.c-rating');
      var currentRating = data.rating;
      var maxRating = 5;
      var callback = function(rating) { //alert(rating); 
      };
      var r = rating(ratingElement, currentRating, maxRating, callback);
    }

  })();

</script>

<!-- EXTERNAL SCRIPTS FOR CALLMENICK.COM, PLEASE DO NOT INCLUDE -->
<script src="../../library/5star/js/lib/githubicons.js"></script>
<script src="../../library/5star/js/lib/carbonad.js"></script>
          </div>
          <div class="col-lg-9">
            <h3>Performance Report</h3>
            <div id="chart"></div>

          </div>
        </div>
        
		  <!-- yahan pe user ke stars aayenge-->
		
      </div>
      <h3>Pending Events</h3>
      <div id="pending_events">
      </div>
      <div class="callout callout-danger">
          <h4>Awareness campaign!</h4>

          <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar
            and the content will slightly differ than that of the normal layout.</p>
            <div class="invite">
              <button class="btn btn-success" onclick="accept(this)">Accept</button>
              <button class="btn btn-default" onclick="reject(this)">Reject</button>
            </div>
        </div>
      <h3 id="upcoming">Upcoming Events</h3>
        <div id="upcoming_events">

        </div>
       <div class="callout callout-info">
        <h4>Blood Donation Camp!</h4>

        <p>Add the layout-boxed class to the body tag to get this layout. The boxed layout is helpful when working on
          large screens because it prevents the site from stretching very wide.</p>
      </div>
      <div class="callout callout-info">
        <h4>Cancer campaign!</h4>

        <p>Add the layout-boxed class to the body tag to get this layout. The boxed layout is helpful when working on
          large screens because it prevents the site from stretching very wide.</p>
      </div>
      <h3>Previous attended events</h3>
      <div class="callout callout-danger">
          <h4>Awareness campaign!</h4>

          <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar
            and the content will slightly differ than that of the normal layout.</p>
        </div>
        <div class="callout callout-danger">
          <h4>Women empowerment campaign!</h4>

          <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar
            and the content will slightly differ than that of the normal layout.</p>
        </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="col-lg-3">
            

<!-- /EXTERNAL SCRIPTS -->
         </div>
          
        </div>
        
      <!-- yahan pe user ke stars aayenge-->
    
      </div> 
      </section>
	  
	  
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php include "volunteerscripts_bottom.php";?>


</body>
</html>
