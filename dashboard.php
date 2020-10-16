<?php
require "header.php";
?>

<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="strap.css">
<script src="https://kit.fontawesome.com/61b19d8903.js" crossorigin="anonymous"></script>
<title>Home - Hue</title>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/png" href="img/profile_small.png" />
<title>Twitler | Dashboard</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<script type="7046296573e247455484c262-text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ca214d31de11b6e3b063ee0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

</head>
<body>
<div id="wrapper">
<nav class="navbar-default navbar-static-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav metismenu" id="side-menu">
<li class="nav-header">
<span>
<li>
<a href="/dashboard.php"><i class="fab fa-dashcube"></i> <span class="nav-label">Home</span></a>
</li>
<li>
<a href="https://discord.gg/eJvCbZW"><i class="fab fa-discord"></i> <span class="nav-label">Discord</span></a>
</li>
<li>

</li>
</ul>
</div>
</nav>
<div id="page-wrapper" class="gray-bg">
<div class="row border-bottom">
<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
<a class="navbar-minimalize minimalize-styl-2 btn btn-success" href="#"><i class="fa fa-bars"></i> </a>
</div>
<ul class="nav navbar-top-links navbar-right">
<li>
<span class="m-r-sm text-muted welcome-message">
</li>
<li>
<div class="dropdown" style="float:right;">
<?php
                    if (isset($_SESSION['userId'])) {
                        echo '<button class="dropbtn"><i class="fas fa-user-circle"></i> '.$_SESSION['userUid'].'</button>
                        <div class="dropdown-content">
                        <a class="logout" href="includes/logout.inc.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </div>';
                    }
                    else {
                        echo '<a href="login.php"><button class="button button5">Login</button></a>';
                    }
                ?>
                </span>
                </div>
</li>
</ul>
</nav>
</div>
<div class="wrapper wrapper-content">
<div class="row">
<div class="col-lg-3">
<div class="widget style1 lazur-bg">
<div class="row">
<div class="col-xs-4">
<i class="fas fa-exclamation-circle fa-5x"></i>
</div>
<div class="col-xs-8 text-right">
<span> Cheat Status </span>
<h2 class="font-bold">DETECTED</h2>
</div>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="widget style1 yellow-bg">
<div class="row">
<div class="col-xs-4">
<i class="fas fa-code-branch fa-5x"></i>
</div>
<div class="col-xs-8 text-right">
<span> Version </span>
<h2 class="font-bold">1.0</h2>
</div>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="widget style1 red-bg">
<div class="row">
<div class="col-xs-4">
<i class="fas fa-user-circle fa-5x"></i>
</div>
<div class="col-xs-8 text-right">
<span> Registered Users </span>
<h2 class="font-bold"></h2>
</div>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="widget style1" style="background-color: #0076a0; color: white;">
<div class="row">
<div class="col-xs-4">
<i class="fas fa-map-marker-alt fa-5x"></i>
</div>
<div class="col-xs-8 text-right">
<span> Your IP </span>
<h2 class="font-bold"><?php echo $_SERVER['SERVER_ADDR']; ?></h2>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8">
<div class="panel panel-primary">
<div class="panel-heading">
    Announcements
</div>
<div class="panel-body">
<div class="pre-scrollable" style="max-height: 792px">
<ul class="sortable-list connectList agile-list ui-sortable">
<li class="info-element ui-sortable-handle">
    <p class="username--style1">hue.gg v1.0 is now out!</p><br>Head to downloads to pick it up!
</li>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<!--<div class="footer">
<div>
<strong>Copyright</strong> &copy; hue.gg
</div>
</div>-->
</div>
</div>
<script src="js/jquery-3.1.1.min.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/bootstrap.min.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/flot/jquery.flot.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/flot/jquery.flot.spline.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/flot/jquery.flot.resize.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/flot/jquery.flot.pie.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/flot/jquery.flot.symbol.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/flot/jquery.flot.time.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/peity/jquery.peity.min.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/demo/peity-demo.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/inspinia.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/pace/pace.min.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/jquery-ui/jquery-ui.min.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/easypiechart/jquery.easypiechart.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="js/plugins/sparkline/jquery.sparkline.min.js" type="7046296573e247455484c262-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="7046296573e247455484c262-|49" defer=""></script></body>
</head>
<main>
</main>


<?php
require "footer.php";
?>