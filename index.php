<?php require_once '_header.php'; ?>

    <div class="jumbotron">
        <div class="page-header">
           <h1>PHP Server Dashboard <small><?php echo $_SERVER['SERVER_NAME'] ?></small></h1>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 widget">
                <div class="well">
                    <a href="adminer/" class="btn btn-primary btn-large btn-block">
                        <i class="fa fa-th-list fa-white"></i><br/>
                        <span><strong>Adminer</strong></span>            
                    </a>
                    <h4>MySQL / PostgreSQL<br/>Database Manager</h4>
                    <p>
                        version 4.0.3<br/>
                        <a href="http://adminer.org/" target="_blank">app website</a>
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 widget">
                <div class="well">
                    <a href="rockmongo/" class="btn btn-primary btn-large btn-block">
                        <i class="fa fa-th-list fa-white"></i><br/>Rockmongo        
                    </a>
                    <h4>MongoDB<br/>Database Manager</h4>
                    <p>
                        version 1.1.5<br/>
                        <a href="http://rockmongo.com/" target="_blank">app website</a>
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 widget">
                <div class="well">
                    <a href="apc/" class="btn btn-primary btn-large btn-block">
                        <i class="fa fa-signal fa-white"></i><br/>APC
                    </a>
                    <h4>Cache Manager<br/>Status</h4>
                    <p>
                        version <?php echo phpversion('apc') ?><br/>
                        <a href="http://www.php.net/manual/en/book.apc.php" target="_blank">app website</a>
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 widget">
                <div class="well">
                    <a href="phpsysinfo/" class="btn btn-primary btn-large btn-block">
                        <i class="fa fa-signal fa-white"></i><br/>PHPSysInfo
                    </a>
                    <h4>Server<br/>Info Status</h4>
                    <p>
                        version 3.1.9<br/>
                        <a href="http://rk4an.github.io/phpsysinfo/" target="_blank">app website</a>
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 widget">
                <div class="well">
                    <a href="phpinfo/" class="btn btn-primary btn-large btn-block">
                        <i class="fa fa-signal fa-white"></i><br/>PHP Info
                    </a>
                    <h4>PHP Server Info<br/>Status</h4>
                    <p>
                        version <?php echo phpversion() ?><br/>
                        <a href="http://www.php.net/manual/en/function.phpinfo.php" target="_blank">app website</a>
                    </p>
                </div>
            </div>

        </div>
    </div>

<?php require_once '_footer.php'; ?>
