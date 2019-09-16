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

$less->compileFile('less/demo.less', 'css/demo.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>3D Gallery with CSS3 and jQuery</title>

        <link href="css/demo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/981.css" />
        <script src="js/modernizr.custom.53451.js"></script>
    </head>
    <body>
        <?php include_once "981-content.php" ?>

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.gallery.js"></script>
        <script>
            $(function () {
                $('#dg-container').gallery({
					autoplay: true
				});
            });
        </script>
    </body>
</html>