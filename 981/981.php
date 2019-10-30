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
$less->compileFile('less/981.less', 'css/981.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>3D Gallery with CSS3 and jQuery</title>

        <link rel="stylesheet" type="text/css" href="css/swiper.min.css" />
        <link rel="stylesheet" type="text/css" href="css/981.css" />
        <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css" />

        <!--Slideshow-->
        <script src="js/modernizr.custom.53451.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/swiper.min.js"></script>

        <style>
        .visible{
            visibility: hidden !important;
        }
        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }
        </style>
    </head>
    <body style="margin: 0">
        <?php include_once "981-content.php" ?>

        <!--My Script-->
        <script src="js/scripts.js"></script>
    </body>
</html>