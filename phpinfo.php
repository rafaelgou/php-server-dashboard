<?php require_once '_header.php'; ?>

    <div class="jumbotron">
        <div class="page-header">
           <h1>PHP Server Dashboard <small><?php echo $_SERVER['SERVER_NAME'] ?></small></h1>
        </div>
    </div>

    <div class="container phpinfo">
        <div class="row">
            <div class="col-lg-9">
        <?php 

ob_start () ;
phpinfo () ;
$pinfo = ob_get_contents () ;
ob_end_clean () ;

$pinfo = ( preg_replace ( '%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo ) )  ;
$pinfo = str_replace('<table border="0" cellpadding="3" width="600">',  '<table class="table table-bordered table-hover table-condensed">', $pinfo);
$pinfo = str_replace('<td class="e">',  '<th>', $pinfo);
$pinfo = str_replace('<img',  '<img style="float:left;margin-right: 20px;" ', $pinfo);
preg_match_all('/\<a name\=\"(.*?)\"\>(.*?)\<\/a\>/', $pinfo, $index);
$pinfo = ( preg_replace ( '/(<h2>)(<a name=".*?">)(.*?)(<\/a>)(<\/h2>)/', '$2$4$1$3$5', $pinfo ) )  ;

echo $pinfo;
?>
            </div>
            <div class="col-lg-3" style="float:right; position:fixed; top: 80px; right:10px;">

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title class="text-center"">Index</h3>
    </div>
    <ul class="list-inline">
    <?php foreach($index[1] as $k => $i) : ?>
        <li class=""><a href="#<?php echo $i ?>"><?php echo $index[2][$k] ?></a></li>
    <?php endforeach; ?>
    </ul>
    <hr/>
    <p class="text-center">
        <a href="#"><i class="icon icon-arrow-up"></i> Back to Top</a>
    <p>
</div>
            </div>

        </div>
    </div>

<?php require_once '_footer.php'; ?>
