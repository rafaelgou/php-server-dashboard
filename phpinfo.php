<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Server Dashboard - <?php echo $_SERVER['SERVER_NAME'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.0/flatly/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="metro/js/html5shim.js"></script>
    <![endif]-->
  </head>


  <body>

    <header class="navbar navbar-default navbar-fixed-top bs-docs-nav" role="banner">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">PHP Server Dashboard</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
            <ul class="nav navbar-nav">
                    <li><a href="adminer/"><i class="icon-th-list icon-white"></i> Adminer</a></li>
                    <li><a href="rockmongo/"><i class="icon-th-list icon-white"></i> RockMongo</a></li>
                    <li><a href="apc/"><i class="icon-signal icon-white"></i> APC</a></li>
                    <li><a href="phpsysinfo/"><i class="icon-signal icon-white"></i> PHPSysInfo</a></li>
                    <li><a href="phpinfo.php"><i class="icon-signal icon-white"></i> PHP Info</a></li>
            </ul>
        </nav>
    </header>

    <div class="jumbotron">
        <div class="page-header">
           <h1>PHP Server Dashboard <small><?php echo $_SERVER['SERVER_NAME'] ?></small></h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <?php 

ob_start () ;
phpinfo () ;
$pinfo = ob_get_contents () ;
ob_end_clean () ;

$pinfo = ( preg_replace ( '%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo ) )  ;
$pinfo = str_replace('<table border="0" cellpadding="3" width="600">',  '<table class="table table-bordered table-hover table-condensed">', $pinfo);
$pinfo = str_replace('<td class="e">',  '<th>', $pinfo);

$pinfo = str_replace('<img',  '<img style="float:left;margin-right: 20px;" ', $pinfo);


echo $pinfo;
?>
        </div>
    </div>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
          <div class="copy">
            <p class="author">
                 © 2013 <span><a href="http://tech.rgou.net">Rafael Goulart</a></span> | Licensed under <a href="license.php">GPL3</a>
            </p>
          </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</footer>

<!-- Javascript CDN -->
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.0/js/bootstrap.min.js"></script>

  </body>
</html>
