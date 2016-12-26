<?php 
$landing = 'http://yithemes.com/themes/wordpress/celestino-clean-and-creative-portfolio-theme/?utm_source=yith-panel&utm_medium=wpadmin&utm_content=tab-premium-celestino&utm_campaign=yith-admin';
$live = 'http://preview.yithemes.com/celestino/';

$domain = 'http://yithemes.com';
$base_url = get_template_directory_uri();

$name = 'Celestino Clean and Creative Portfolio theme';

// price
$price = '60';
if ( false === ( $price = get_transient( 'yit_theme_price_' . get_template() ) ) ) {
    $requrl = 'http://yithemes.com/?wc-api=yit_theme_price&theme=celestino';
    $response = wp_remote_get( $requrl );
    if ( ! is_wp_error( $response ) ) {
        $price = wp_remote_retrieve_body( $response );
        set_transient( 'yit_theme_price_' . get_template(), $price, WEEK_IN_SECONDS );
    }
}
?>
<style type="text/css">

.landing h1 { color:#253963; }
.landing h2, .landing h2.post-title { color:#253963; }
.landing h3, .landing .home_item h4 a, .landing .home_item h4 { color:#253963; }
.landing h4 { color:#253963; }
.landing h5 { color:#253963; }
.landing h6 { color:#253963; }
.landing h1 span, .landing h2 span, .landing h3 span, .landing h4 span, .landing h5 span, .landing h6 span { color:#658103; }   
.container.landing h1, .container.landing h2 {color:#635F64 !important;}
.container.landing h1{margin-top: 25px}
.landing h1 { font-size:23px; clear:both; }
.landing h2, .landing h2 a { font-size:20px; clear:both; }
.landing h3 { font-size:13px; }

.landing p, .landing .unoslider_caption { font-family: 'Droid Sans', sans-serif !important; }
.landing h1 { font-family: 'Nunito', sans-serif !important; }
.landing h2, .landing h2 a { font-family: 'Nunito', sans-serif !important; }
.landing h3 { font-family: 'Nunito', sans-serif !important; }
.landing h4 { font-family: 'Nunito', sans-serif !important; }
.landing h5 { font-family: 'Nunito', sans-serif !important; }
.landing h6 { font-family: 'Nunito', sans-serif !important; }

.container.landing {width:800px;margin-left:0;}
.container.landing ul.actions {width:600px;}
.container.landing ul.free-features li, .landing ul.premium-features li {width:400px;}
.container.landing ul.free-features li img, .landing ul.premium-features li img {width:100px;height:100px;}
.container.landing ul.premium-features h3 {font-size:125%;margin-top:0;}
.container.landing ul.free-features li p, .landing ul.premium-features li p {font-size:13px;}
.container.landing .free-bonus {width:730px;}
.container.landing .buy-now-new {width:784px;margin:20px auto;clear:both;}
</style>                   
    
<!-- START CONTAINER -->
<div class="container bolder-tpl landing">
    <img src="<?php echo $base_url ?>/core/assets/images/premium/celestino.png" class="logo" alt="<?php echo $name ?>" />
    <!-- END LOGO -->
        
    <h1>Why you have to</h1>
    <h2 class="subtitle"><span>UPGRADE</span> TO THE <span>PREMIUM VERSION</span></h2>
        
    <!-- START CALL TO ACTIONS -->
    <a href="" style="float:left">
    <ul class="actions">
    <li><a href="<?php echo $landing ?>" target="_blank"><img src="<?php echo $base_url ?>/core/assets/images/premium/buy-now.png" alt="Buy Now"></a></li>
    <li><a href="<?php echo $live ?>" target="_blank"><img src="<?php echo $base_url ?>/core/assets/images/premium/live-preview.png" alt="Live Preview"></a></li>
    </ul>
    
    <div class="clearer"></div>
        
    <!-- START PREMIUM FEATURES -->
    <ul class="premium-features">

        <li>
            <img src="<?php echo $base_url ?>/core/assets/images/premium/forum.jpg" alt="<?php echo $name ?>" />
            
            <h3>Free support</h3>
            
            <p>
                We provide free support for our premium themes, so you can open a new ticket and ask help to our developers.
            </p>
        </li>
        
        <li>
            <img src="<?php echo $base_url ?>/core/assets/images/premium/videotutorials.jpg" alt="<?php echo $name ?>" />
            
            <h3>Videotutorials</h3>
            
            <p>
                Set the theme is easier with our videotutorials, so you can watch how to set each page of the theme step by step.
            </p>
        </li>

        <li>
            <img src="<?php echo $base_url ?>/core/assets/images/premium/import_settings.jpg" alt="<?php echo $name ?>" />

            <h3>Sample data</h3>

            <p>
                 With a simple click you can import our demo files, so your theme will appear exactly like the theme preview.
            </p>
        </li>

        <li>
            <img src="<?php echo $base_url ?>/core/assets/images/premium/themeoptions-pinkrio.jpg" alt="<?php echo $name ?>" />

            <h3>Extensive Theme Options</h3>

            <p>
                With our advanced theme options page, you are given complete control over your theme and its settings.
            </p>
        </li>
        
        <li>
            <img src="<?php echo $base_url ?>/core/assets/images/premium/slider-pinkrio.jpg" alt="<?php echo $name ?>" />
            
            <h3>9 slider types</h3>
            
            <p>
                Compose your front page choosing your favourite slider to display your product and services.
            </p>
        </li>
        
        <li>
            <img src="<?php echo $base_url ?>/core/assets/images/premium/unlimited_colors.jpg" alt="<?php echo $name ?>" />
            
            <h3>Unlimited colors</h3>
            
            <p>
                In the premium version of the theme you can easily edit the colors of all the sections and elements like text, links,slogan and so on.
            </p>
        </li>
        
        <li>
            <img src="<?php echo $base_url ?>/core/assets/images/premium/cufon.jpg" alt="<?php echo $name ?>" />
            
            <h3>600+ Cufon and Google Fonts</h3>
            
            <p>
                Compose your front page chosing your favourite slider to display your product and services.
            </p>
        </li>

        <li>
            <img src="<?php echo $base_url ?>/core/assets/images/premium/contact-pinkrio.jpg" alt="<?php echo $name ?>" />

            <h3>Unlimited contact forms with Javascript validation</h3>

            <p>
                Create unlimited contact forms for your site and set up each form very easily by our panel.
            </p>
        </li>

        <li>
            <img src="<?php echo $base_url ?>/core/assets/images/premium/memento-portfolio.jpg" alt="<?php echo $name ?>" />

            <h3>7 portfolio layouts</h3>

            <p>
               Chose your favorite portfolio style and show your projects.
            </p>
        </li>

        <li>
            <img src="<?php echo $base_url ?>/core/assets/images/premium/video-pinkrio.jpg" alt="<?php echo $name ?>" />

            <h3>Gallery and Videogallery</h3>

            <p>
                 To show your images and your video projects on your site.
            </p>
        </li>

        <li>
            <img src="<?php echo $base_url ?>/core/assets/images/premium/customwidget.jpg" alt="<?php echo $name ?>" />

            <h3>Custom widgets</h3>

            <p>
                 Chose your favorite portfolio style and show your projects.
            </p>
        </li>

        <li>
            <img src="<?php echo $base_url ?>/core/assets/images/premium/shortcodes-pinkrio.jpg" alt="<?php echo $name ?>" />

            <h3>Shortcode manager</h3>

            <p>
                 To show your images and your video projects on your site.
            </p>
        </li>

    </ul>

    <div class="clearer"></div>
    
        <!-- START BUTTON BUY NOW -->
    <div class="buy-now-new">
        <h2>TODAY ONLY <span class="amout">&#36;<?php echo $price ?></span></h2>
		
        <a href="<?php echo $landing ?>" target="_blank"><img src="<?php echo $base_url ?>/core/assets/images/premium/add-to-cart.png" alt="Add to cart" /></a>
        
    </div>
    <!-- END BUTTON BUY NOW -->
    
</div>
<!-- END CONTAINER -->