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
                        version 4.2.5<br/>
                        <a href="http://adminer.org/" target="_blank">app website</a>
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
                        version 3.2.5<br/>
                        <a href="http://rk4an.github.io/phpsysinfo/" target="_blank">app website</a>
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 widget">
                <div class="well">
                    <a href="phpinfo.php" class="btn btn-primary btn-large btn-block">
                        <i class="fa fa-signal fa-white"></i><br/>PHP Info
                    </a>
                    <h4>PHP Server Info<br/>Status</h4>
                    <p>
                        version <?php echo phpversion() ?><br/>
                        <a href="http://www.php.net/manual/en/function.phpinfo.php" target="_blank">app website</a>
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 widget">
                <div class="well">
                    <a href="genghis/genghis.php/" class="btn btn-primary btn-large btn-block">
                        <i class="fa fa-th-list fa-white"></i><br/>Genghis
                    </a>
                    <h4>Genghis<br/>Basic MongoDB navigator</h4>
                    <p>
                        version 2.3.11<br/>
                        <?php
                        if (!extension_loaded('mongo')) {
                            echo "<div class=\"alert alert-danger \"><i class=\"fa fa-warning\"></i> extension not installed!</div><br/>";
                        }
                        ?>
                        <a href="http://genghisapp.com/" target="_blank">app website</a>
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
                        version 1.1.7<br/>
                        <?php
                        if (!extension_loaded('mongo')) {
                            echo "<div class=\"alert alert-danger \"><i class=\"fa fa-warning\"></i> extension not installed!</div><br/>";
                        }
                        ?>
                        <a href="http://rockmongo.com/" target="_blank">app website</a>
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 widget">
                <div class="well">
                    <a href="apc/" class="btn btn-primary btn-large btn-block">
                        <i class="fa fa-signal fa-white"></i><br/>APC
                    </a>
                    <h4>Advanced PHP Cache Manager Status</h4>
                    <p>
                        <?php
                        if (extension_loaded('APC')) {
                            echo "version " . phpversion();
                        } else {
                            echo "<div class=\"alert alert-danger \"><i class=\"fa fa-warning\"></i> extension not installed!</div>";
                        }
                        ?><br/>
                        <a href="http://www.php.net/manual/en/book.apc.php" target="_blank">app website</a>
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 widget">
                <div class="well">
                    <span class="btn btn-primary btn-large btn-block">
                        <i class="fa fa-signal fa-white"></i><br/>Zend OpCache
                    </span>
                    <a href="opcache/opcache.php" class="btn btn-default btn-sm btn-block">
                        OpCache Status
                    </a>
                    <a href="opcache/opcachegui.php" class="btn btn-default btn-sm btn-block">
                        Amnuts OPCacheGUI
                    </a>
                    <a href="opcache/ocp.php" class="btn btn-default btn-sm btn-block">
                        OCP
                    </a>

                    <h4>Zend OpCache Manager Status</h4>
                    <p>
                        <?php
                        if (extension_loaded('Zend OPcache')) {
                            $opcache = opcache_get_configuration();
                            echo "version {$opcache['version']['version']}";
                        } else {
                            echo "<div class=\"alert alert-danger \"><i class=\"fa fa-warning\"></i> extension not installed!</div>";
                        }
                        ?><br/>
                        <a href="http://php.net/manual/pt_BR/book.opcache.php" target="_blank">OpCache website</a>
                        <br/>
                        <a href="https://github.com/rlerdorf/opcache-status" target="_blank">Rasmus opcache-status website</a>
                        <br/>
                        <a href="https://github.com/amnuts/opcache-gui" target="_blank">Amnuts opcache-gui website</a>
                        <br/>
                        <a href="https://gist.github.com/ck-on/4959032" target="_blank">CK-ON website</a>
                    </p>
                </div>
            </div>

        </div>
    </div>

<?php require_once '_footer.php'; ?>
