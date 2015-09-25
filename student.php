<?php
	require_once('4.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="font-size: 16px;">Welcome Student!</a>
            </div>
            <div style="float: right;margin-top:14px;"><a href="index.php" class="btn btn-danger square-btn-adjust">Logout &nbsp;<i class="fa fa-lg fa-chevron-right" style="font-size:12px;"></i></a></div>
            <img src="assets/img/tup-logo.png" class="img-responsive pull-left" style="width:48px; margin-left:10px; margin-top:5px;" />
            <div style="color: white;
margin-top:16px;
margin-left: 10px;
float: left;
font-size: 16px;">
                TUP Learning Hub</div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>
					<li class="text-center">
                        <p>-profile here-</p>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
				<div class="col-md-12" style="margin-bottom:25px;">
				<h1>My Dashboard</h1>
				</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-lblue">
                            <div class="panel-body pd-panel">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-lblue">
                               My Subjects

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-purple">
                            <div class="panel-body pd-panel">
                                <i class="fa fa-edit fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-purple">
                                My Library

                            </div>
                        </div>
                    </div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body pd-panel">
                                <i class="fa fa-bar-chart-o fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-green">
                               Messages

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body pd-panel">
                                <i class="fa fa-edit fa-5x"></i>
                            </div>
                            <div class="panel-footer back-footer-red">
                                Notifications

                            </div>
                        </div>
                    </div>
                </div>
				

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>