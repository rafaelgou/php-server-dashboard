<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Server Dashboard - <?php echo $_SERVER['SERVER_NAME'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.0/flatly/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="metro/js/html5shim.js"></script>
    <![endif]-->
  </head>

  <body>

    <header class="navbar navbar-default navbar-fixed-top" role="banner">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="color: white;">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars fa-lg fa-white"></i>
            </button>
            <a class="navbar-brand" href="index.php">PHP Server Dashboard</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
            <ul class="nav navbar-nav">
                <li><a href="adminer/"><i class="fa fa-th-list fa-white"></i> Adminer</a></li>
                <li><a href="rockmongo/"><i class="fa fa-th-list fa-white"></i> RockMongo</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-signal fa-white"></i> PHP Cache <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="apc/">APC</a></li>
                        <li><a href="opcache/opcache.php">OpCache Status</a></li>
                        <li><a href="opcache/op.php">Amnuts OPCacheGUI</a></li>
                        <li><a href="opcache/OpCacheGUI/public">OpCacheGUI</a></li>
                        <li><a href="opcache/ocp.php">CK-ON</a></li>
                    </ul>
                </li>
                <li><a href="phpsysinfo/"><i class="fa fa-signal fa-white"></i> PHPSysInfo</a></li>
                <li><a href="phpinfo.php"><i class="fa fa-signal fa-white"></i> PHP Info</a></li>
            </ul>
        </nav>
    </header>
