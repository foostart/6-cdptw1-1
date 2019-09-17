<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                        <h2>
                            Weekly Summary
                            <small>Activity shares</small>
                        </h2>
                        <ul>
                            <li>
                                <a class="link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="link">
                                    <i class="fa fa-close"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    
                    <div class="content">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <!-- Weekly chart -->
                                <div id="chartReportContainer">
                                </div>
                                <!-- -->
                                <h4>Weekly sales progress</h4>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h4 class="rate">Bounce Rates</h4>
                                        <div id="chartPieContainer1" style="">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h4 class="rate">New Traffic</h4>
                                        <div id="chartPieContainer2">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h4 class="rate">Device Share</h4>
                                        <div id="chartPieContainer3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>