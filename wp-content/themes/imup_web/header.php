<!-- START HEAD -->
<head>
    <meta charset="UTF-8" />

    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

    <title> <?php bloginfo('name'); ?> <?php bloginfo('description'); ?></title>

    <h1>
      <a href="<?php echo get_option('home'); ?>">
         <?php bloginfo('name'); ?></a>
    </h1>
    <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo ('template_directory'); ?>/css/reset.css" />
    <!-- BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo ('template_directory'); ?>/css/bootstrap.css" />
    <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo ('template_directory'); ?>/style.css" />

    <link rel='stylesheet' id='custom-css'  href='<?php bloginfo ('template_directory'); ?>/css/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css'  href='<?php bloginfo ('template_directory'); ?>http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed:300,400,800%3A300%7CRokkitt%7CShadows+Into+Light%7CMaven+Pro:400,700%7CAbel%7CMontez' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href='<?php bloginfo ('template_directory'); ?>/css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thickbox-css'  href='<?php bloginfo ('template_directory'); ?>/js/thickbox/thickbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='tipsy-css'  href='<?php bloginfo ('template_directory'); ?>/css/tipsy.css' type='text/css' media='all' />

    <link rel='stylesheet' id='fonts-css'  href='<?php bloginfo ('template_directory'); ?>/css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='full-descriptor-css'  href='<?php bloginfo ('template_directory'); ?>/portfolios/full-description/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='slide-details-css'  href='<?php bloginfo ('template_directory'); ?>/portfolios/slide-detail/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='shortcode-css'  href='<?php bloginfo ('template_directory'); ?>/css/shortcodes.css' type='text/css' media='all' />

    <link rel='stylesheet' id='colorbox-css'  href='<?php bloginfo ('template_directory'); ?>/css/colorbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-button-mfast-3-css'  href='css/buttons/mfast-3.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css'  href='<?php bloginfo ('template_directory'); ?>/sliders/flexslider/css/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-elegant-css'  href='<?php bloginfo ('template_directory'); ?>/sliders/flexslider-elegant/css/slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-css'  href='<?php bloginfo ('template_directory'); ?>/sliders/revolution-slider/css/slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-settings-css'  href='<?php bloginfo ('template_directory'); ?>/sliders/revolution-slider/rs-plugin/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-captions-css'  href='<?php bloginfo ('template_directory'); ?>/sliders/revolution-slider/rs-plugin/css/captions.css' type='text/css' media='all' />

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- [favicon] end -->

    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />



    <script type='text/javascript' src='<?php bloginfo ('template_directory'); ?>/js/jquery/jquery.js'></script>

    <div id="text-8" class=" widget-last span6 widget widget_text">
        <div class="textwidget">
            <a href="# " class="socials-small facebook-small" title="Facebook"  >facebook</a>

            <a href="#" class="socials-small rss-small" title="Rss"  >rss</a>

            <a href="#" class="socials-small twitter-small" title="Twitter"  >twitter</a>

            <a href="#" class="socials-small google-small" title="Google"  >google</a>

            <a href="#" class="socials-small linkedin-small" title="Linkedin"  >linkedin</a>

            <a href="#" class="socials-small pinterest-small" title="Pinterest"  >pinterest</a></div>
    </div>
    <body class="home page no_js responsive stretched">

    <!-- START BG SHADOW -->
    <div class="bg-shadow">

    <!-- START WRAPPER -->
    <div id="wrapper" class="container group">
    <!-- START TOP BAR -->

    <!-- START TOP BAR -->
    <div id="topbar">
        <div class="container">
            <div class="row">
                <div id="last-tweets-3" class="widget-first span6 widget last-tweets">
                    <h3>Last Tweets</h3>
                    <div class="list-tweets-3"></div>

                    <script type="text/javascript">
                        jQuery(function($){
                            $('#last-tweets-3 .list-tweets-3').tweetable({
                                listClass: 'tweets-widget-3',
                                username: 'YIW',
                                time: false,
                                limit: 3,
                                replies: false
                            });
                        });
                    </script>

                </div>

                <div id="text-8" class=" widget-last span6 widget widget_text">
                    <div class="textwidget">
                        <a href="# " class="socials-small facebook-small" title="Facebook"  >facebook</a>

                        <a href="#" class="socials-small rss-small" title="Rss"  >rss</a>

                        <a href="#" class="socials-small twitter-small" title="Twitter"  >twitter</a>

                        <a href="#" class="socials-small google-small" title="Google"  >google</a>

                        <a href="#" class="socials-small linkedin-small" title="Linkedin"  >linkedin</a>

                        <a href="#" class="socials-small pinterest-small" title="Pinterest"  >pinterest</a></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(function($){
            var twitterSlider = function(){
                $('#topbar .last-tweets ul').addClass('slides');
                $('#topbar .last-tweets').flexslider({
                    animation: "fade",
                    slideshowSpeed: 5 * 1000,
                    animationDuration: 700,
                    directionNav: false,
                    controlNav: false,
                    keyboardNav: false
                });
            };
            $('#topbar .last-tweets > div').bind('tweetable_loaded', function(){
                twitterSlider();
            });
        });
    </script>

    <!-- END TOP BAR -->

    <!-- START HEADER -->
    <div id="header" class="group">
        <div class="group container">
            <div class="row">
                <div class="span12">

                    <div class="row">
                        <!-- START LOGO -->
                        <div id="logo" class="span4 group">
                            <a id="logo-img" href="index.html" title="celestino">
                                <img src="images/celestino1.png" title="celestino" alt="celestino" />
                            </a>

                            <p id="tagline">only for creative minds.</p>
                        </div>
                        <!-- END LOGO -->
                        <div id="menu" class="span8 group">
                            <!-- START MAIN NAVIGATION -->
                            <div class="menu">
                                <ul id="nav" class="sf-menu">
                                    <li class="nav-icon-hi current_page_item">
                                        <a href="index.html">
                                            Home
                                            <div style="position:absolute; left: 50%;">
                                                <span class="triangle">&nbsp;</span>
                                            </div>
                                        </a>

                                    <li class="nav-icon-monitor">
                                        <a href="#">
                                            Sliders
                                            <div style="position:absolute; left: 50%;">
                                                <span class="triangle">&nbsp;</span>
                                            </div>
                                        </a>

                                    </li>
                                    <li class="nav-icon-doc">
                                        <a href="#">
                                            Pages
                                            <div style="position:absolute; left: 50%;">
                                                <span class="triangle">&nbsp;</span>
                                            </div>
                                        </a>

                                    </li>
                                    <li class="nav-icon-works">
                                        <a href="#">
                                            Portfolio
                                            <div style="position:absolute; left: 50%;">
                                                <span class="triangle">&nbsp;</span>
                                            </div>
                                        </a>

                                    </li>
                                    <li class="nav-icon-newspaper">
                                        <a href="#">
                                            Blog
                                            <div style="position:absolute; left: 50%;">
                                                <span class="triangle">&nbsp;</span>
                                            </div>
                                        </a>

                                    </li>
                                    <li class="nav-icon-lab">
                                        <a href="#">
                                            Shortcodes
                                            <div style="position:absolute; left: 50%;">
                                                <span class="triangle">&nbsp;</span>
                                            </div>
                                        </a>

                                    </li>
                                </ul>
                            </div>
                            <!-- END MAIN NAVIGATION -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="border-header"></div>
    </div>

</head>
<!-- END HEAD -->
