<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Content e-commerce</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1180.less', 'css/1180.css');
        ?>
        <link rel="stylesheet" href="css/1180.css">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/canvasjs.min.js"></script>
        <script src="js/highcharts.js"></script>
        <script src="js/chart-rain.js"></script>
        <script src="js/collapse-close.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/datetimepicker.js"></script>
    </head>

    <body>
        <?php include '1180-content.php'; ?>
    </body>
</html>