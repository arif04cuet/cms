<?php
error_reporting(E_ALL);
if (session_id() == '')
    session_start();
define('ADMIN_FOLDER', 'zenadmin');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Master Essay</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- styles -->
        <link href="theme/css/bootstrap.css" rel="stylesheet">
        <link href="theme/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo ADMIN_FOLDER ?>/theme/css/coda-slider.css" rel="stylesheet">
        <link href="<?php echo ADMIN_FOLDER ?>/theme/dataTable/media//css/jquery.dataTables.css" rel="stylesheet">
        <link href="theme/css/style.css" rel="stylesheet">

        <!-- js -->
        <script src="theme/js/jquery.min.js" type="text/javascript"></script>
        <script src="theme/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="theme/js/jquery.tabify.js" type="text/javascript"></script>
        <script src="theme/js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="theme/js/jquery.coda-slider-3.0.min.js" type="text/javascript"></script>
        <script src="<?php echo ADMIN_FOLDER ?>/theme/dataTable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="<?php echo ADMIN_FOLDER ?>/theme/js/jquery.validate.js" type="text/javascript"></script>
	<script src="<?php echo ADMIN_FOLDER ?>/theme/js/jquery.form.min.js" type="text/javascript"></script>
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script type="text/javascript">
	    $(document).ready(function() {

		$(".sidebar .nav li").hover(function() {
		    $(this).siblings().removeAttr('style');
		    $(this).prev()
			    .css("background", "url('theme/img/sidebar-li-hover-back.png') no-repeat center bottom");
		    $(this).next()
			    .css("background", "url('theme/img/sidebar-li-hover-back.png') no-repeat center top");
		});
		$(".sidebar .nav li").mouseout(function() {
		    $(this).siblings().removeAttr('style');
		});

		//Testimonial Slider
		$('#slider-id').codaSlider({
		    dynamicArrowLeftText: "&#171;",
		    dynamicArrowRightText: "&#187;",
		    dynamicTabs: false,
		    autoSlideInterval: 2000,
		    autoSlide: true,
		    autoSlideInterval: 8000
		});

		$("a.pre").click(function() {
		    $("div.coda-nav-left").click();
		    return false;
		});
		$("a.next").click(function() {
		    $("div.coda-nav-right").click();
		    return false;
		});
	    });
        </script>
        <style type="text/css">
            div.coda-nav-left,div.coda-nav-right{display:none}
        </style>
    </head>

    <body>
	<?php include('crud/class/mysql_crud.php'); ?>
	<?php include 'functions.php'; ?>

        <header id="header">
            <div class="container-narrow">
                <div class="row-fluid">
                    <div class="span6 border">
                        <a href="index.php"><img src="theme/img/logo.png"/></a>
                        <span class="slogan">For All Your Academic Needs</span>
                    </div>

                    <div class="span6 border">
                        <ul class="nav  pull-right">
                            <li> <img src="theme/img/support.jpg"/></li>
                            <li>
                                <form action="">
                                    <div class="input-append search">
                                        <input class="input-xlarge" id="appendedInputButton" type="text" style="padding: 0;height: 35px;" placeholder="search enter your...">
                                        <input type="image" src="theme/img/search_btn.jpg" alt="Search" style="border-radius: 0">
                                    </div>
                                </form>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <nav>
                            <ul class="nav nav-pills top-nav">
                                <li class="" style="margin-left: 5px;"><a href="essay.php">Essay</a></li>
                                <li><a href="research-papers.php">Research Paper</a></li>
                                <li><a href="course-work.php">Course Work</a></li>
                                <li><a href="editing-and-proofreading.php">Editing & Proofreading</a></li>
                                <li><a href="./case-study.php">Case Study</a></li>
                                <li><a href="dissertation-services.php">Dissertation Services</a></li>
                                <li><a href="admission.php">Admission</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="resume.php">Resume</a></li>
                                <li><a href="extras.php">Extras</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>