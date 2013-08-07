<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RGOU Server Dashboard - <?php echo $_SERVER['SERVER_NAME'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="//netdna.bootstrapcdn.com/bootswatch/2.3.2/flatly/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">


    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="metro/js/html5shim.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="">
  </head>

  <body>

<!-- Navigation bar starts -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="adminer/"><i class="icon-th-list icon-white"></i> Adminer</a></li>
                        <li><a href="rockmongo/"><i class="icon-th-list icon-white"></i> RockMongo</a></li>
                        <li><a href="apc/"><i class="icon-signal icon-white"></i> APC</a></li>
                        <li><a href="phpsysinfo/"><i class="icon-signal icon-white"></i> PHPSysInfo</a></li>
                        <li><a href="phpinfo.php"><i class="icon-cog icon-white"></i> PHP Info</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
<!-- Navigation bar ends -->

    <div class="container-fluid">
        <div class="page-header">
           <h1>RGOU Server Dashboard <small><?php echo $_SERVER['SERVER_NAME'] ?></small></h1>
        </div>

        <div class="row-fluid">

            <div class="span3" style="text-align:center">
                <div class="well">
                    <a href="adminer/" class="btn btn-primary btn-large btn-block">
                        <i class="icon-th-list icon-white"></i><br/>
                        <span><strong>Adminer</strong></span>            
                    </a>
                    <h4>MySQL / PostgreSQL<br/>Database Manager</h4>
                    <small>version 3.7.1 - <a href="http://adminer.org/" target="_blank">app website</a></small>
                </div>
            </div>

            <div class="span3" style="text-align:center">
                <div class="well">
                    <a href="rockmongo/" class="btn btn-primary btn-large btn-block">
                        <i class="icon-th-list icon-white"></i><br/>Rockmongo        
                    </a>
                    <h4>MongoDB<br/>Database Manager</h4>
                    <small>version 1.1.5 - <a href="http://rockmongo.com/" target="_blank">app website</a></small>
                </div>
            </div>

            <div class="span3" style="text-align:center">
                <div class="well">
                    <a href="apc/" class="btn btn-primary btn-large btn-block">
                        <i class="icon-signal icon-white"></i><br/>APC
                    </a>
                    <h4>Cache Manager<br/>Status</h4>
                    <small>version <?php echo phpversion('apc') ?> - <a href="http://adminer.org/" target="_blank">app website</a></small>
                </div>
            </div>

            <div class="span3" style="text-align:center">
                <div class="well">
                    <a href="phpsysinfo/" class="btn btn-primary btn-large btn-block">
                        <i class="icon-signal icon-white"></i><br/>PHPSysInfo
                    </a>
                    <h4>Server<br/>Info Status</h4>
                    <small>version 3.1.6 - <a href="http://rk4an.github.io/phpsysinfo/" target="_blank">app website</a></small>
                </div>
            </div>

        </div>

        <div class="row-fluid">

            <div class="span3" style="text-align:center">
                <div class="well">
                    <a href="phpinfo/" class="btn btn-primary btn-large btn-block">
                        <i class="icon-signal icon-white"></i><br/>PHP Info
                    </a>
                    <h4>PHP Server Info<br/>Status</h4>
                    <small>version <?php echo phpversion() ?> - <a href="http://php.net/manual/pt_BR/book.apc.php" target="_blank">app website</a></small>
                </div>
            </div>

        </div>

    </div>

<hr />

<!-- Footer -->
<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="span12">
          <div class="copy">

            <p class="author">
                    Rafael Goulart © 2013 <span><a href="http://tech.rgou.net">http://tech.rgou.net</a></span>. Todos os Direitos Reservados.
            </p>
          </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</footer>

<!-- Javascript CDN -->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>

  </body>
</html>
