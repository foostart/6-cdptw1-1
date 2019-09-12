<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" /> 
        <title>3D Gallery with CSS3 and jQuery</title>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <link href="css/demo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
    </head>
    <body>
        <div class="mod-custom-9">
            <div class="container">
                <!-- Codrops top bar -->
                <div class="codrops-top">
                    <a href="#">
                        <strong>&laquo; Previous Demo: </strong>Page Transitions with CSS3
                    </a>
                    <span class="right">
                        <a href="#">Websites found on The Best Designs</a>
                        <a href="#">Back to the Codrops Article</a>
                    </span>
                    <div class="clr"></div>
                </div>
                <!--/ Codrops top bar -->
                <header>
                    <h1>3D Gallery <span>with CSS3 &amp; jQuery</span></h1>
                    <nav class="codrops-demos">
                        <a class="current-demo" href="index.php">Navigation</a>
                        <a href="index2.php">Auto-Slideshow</a>
                        <a href="index3.php">3 Elements</a>
                    </nav>
                </header>
                <section id="dg-container" class="dg-container">                    
                    <div class="dg-wrapper">
                        <a href="#"><img src="images/1.jpg" alt="image01"><div>http://www.percivalclo.com/</div></a>
                        <a href="#"><img src="images/2.jpg" alt="image02"><div>http://www.percivalclo.com/</div></a>
                        <a href="#"><img src="images/3.jpg" alt="image03"><div>http://www.wanda.net/fr</div></a>
                        <a href="#"><img src="images/4.jpg" alt="image04"><div>http://lifeingreenville.com/</div></a>
                        <a href="#"><img src="images/5.jpg" alt="image05"><div>http://circlemeetups.com/</div></a>
                        <a href="#"><img src="images/6.jpg" alt="image06"><div>http://www.castirondesign.com/</div></a>
                        <a href="#"><img src="images/7.jpg" alt="image07"><div>http://www.foundrycollective.com/</div></a>
                        <a href="#"><img src="images/8.jpg" alt="image08"><div>http://www.mathiassterner.com/</div></a>
                        <a href="#"><img src="images/9.jpg" alt="image09"><div>http://learnlakenona.com/</div></a>
                        <a href="#"><img src="images/10.jpg" alt="image10"><div>http://www.neighborhood-studio.com/</div></a>
                        <a href="#"><img src="images/11.jpg" alt="image11"><div>http://www.beckindesign.com/</div></a>
                        <a href="#"><img src="images/12.jpg" alt="image12"><div>http://kicksend.com/</div></a>
                    </div>
                    <nav>	
                        <span class="dg-prev">&lt;</span>
                        <span class="dg-next">&gt;</span>
                    </nav>
                </section>              
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.gallery.js"></script>
        <script type="text/javascript">
            $(function () {
                $('#dg-container').gallery({
					autoplay: true
				});
            });
        </script>
    </body>
</html>