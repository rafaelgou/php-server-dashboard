<?php require_once '_header.php'; ?>

    <div class="jumbotron">
        <div class="page-header">
           <h1>PHP Server Dashboard <small><?php echo $_SERVER['SERVER_NAME'] ?></small></h1>
        </div>
    </div>

    <div class="container">
        <div class="row">

        <div class="page-header">
           <h1>GPL3 License</small></h1>
        </div>
        
        <pre><?php echo file_get_contents('LICENSE.txt')?></pre>
        </div>
    </div>

<?php require_once '_footer.php'; ?>
