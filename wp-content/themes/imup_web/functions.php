<?php
register_nav_menus( array(
  'primary'   => esc_html__( 'Primary Menu', 'regina-lite' ),
  'secondary' => esc_html__( 'Secondary Menu', 'regina-lite' ),
) );



 if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    //300 pixels wide (and unlimited height)
}
 ?>
