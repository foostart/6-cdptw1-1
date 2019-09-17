<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/type-5.less', 'css/type-5.css');
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module 1181</title>

        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/font-awesome.min.css">
<link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/type-5.css">
        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/canvasjs.min.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/chart-report.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/collapse-close.js" type="text/javascript"></script>
    </head>

    <body>
        <?php  $dir_block.include'1181-content.php'; ?>
    </body>
</html>