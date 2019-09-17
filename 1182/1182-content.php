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
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel">
                            <div class="admin-title">
                                <h2>
                                    Top Profiles
                                    <small>Sessions</small>
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
                            </div>
                            <div class="admin-content">
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class=panel>
                            <div class="admin-title">
                                <h2>
                                    Top Profiles
                                    <small>Sessions</small>
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
                            </div>
                            <div class="admin-content">
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel">
                            <div class="admin-title">
                                <h2>
                                    Top Profiles
                                    <small>Sessions</small>
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
                            </div>
                            <div class="admin-content">
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="listitem">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="d">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>