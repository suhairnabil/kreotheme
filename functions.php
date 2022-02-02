<?php

use function Composer\Autoload\includeFile;

function kreo_theme_setup()
{

    load_theme_textdomain('kreo',get_template_directory().'/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5');
    add_theme_support('custom-logo', [
        'width' => 114,
        'height' => 66,
        'flex-width' => false,
        'flex-height' => false,
    ]);

    // custom header
    add_theme_support('custom-header', [
        'default-image' => get_theme_file_uri('assets/images/hero-bg.jpg'),
        'width' => 2000,
        'height' => 630,
        'flex-width' => true,
        'flex-height' => false,
    ]);


    add_theme_support('post-formats', [
        'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio'
    ]);

    add_theme_support('post-thumbnails');

    add_image_size('kreo_thumb', 315, 315, true);
    // set post-thumbnail
    //  set_post_thumbnail_size(150,150,true);


    register_nav_menu('main-menu', __('Top Primary menu','kreo'));
    register_nav_menu('footer-social-menu',  __('footer social menu','kreo'));
}
add_action('after_setup_theme', 'kreo_theme_setup');

function mytheme_custom_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);

function kreo_enqueue_scripts()
{

    if(is_rtl()){
        
        wp_enqueue_style(
            'kreo-base', // nhandle id
            get_theme_file_uri('assets/css/base-rtl.css'),// source path
            [],// dependency
            null,//'1.0',// رقم الاصدار
            'all'//media
        );

        wp_enqueue_style(
            'kreo-vendor', 
            get_theme_file_uri('assets/css/vendor-rtl.css'),
            ['kreo-base'],
            null,
            'all'
        );

        wp_enqueue_style(
            'kreo-main', 
            get_theme_file_uri('assets/css/main-rtl.css'),
            [],
            null,
            'all'
        );
    


    }else{
        wp_enqueue_style(
            'kreo-base', // nhandle id
            get_theme_file_uri('assets/css/base.css'),// source path
            [],// dependency
            null,//'1.0',// رقم الاصدار
            'all'//media
        );

        wp_enqueue_style(
            'kreo-vendor', 
            get_theme_file_uri('assets/css/vendor.min.css'),
            ['kreo-base'],
            null,
            'all'
        );

     /*   wp_enqueue_style(
            'kreo-main', 
            get_theme_file_uri('assets/css/main.css'),
            [],
            null,
            'all'
        );*/


    }
 
   
    

    wp_enqueue_script(
        'kreo-modernizr', 
        get_theme_file_uri('assets/js/modernizr.js'),
        [],// dependency
        false,// version
        false// in footer
    );

    wp_enqueue_script(
        'kreo-jquery', 
        get_theme_file_uri('assets/js/jquery-1.11.3.min.js'),
        [],// dependency
        false,// version
        true// in footer

    );

    wp_enqueue_script(
        'kreo-migrate', 
        get_theme_file_uri('assets/js/jquery-migrate-1.2.1.min.js'),
        ['kreo-jquery'],// dependency
        null,// version
        true// in footer

    );
    
    wp_enqueue_script(
        'kreo-flexslider', 
        get_theme_file_uri('assets/js/jquery.flexslider-min.js'),
        ['kreo-jquery'],// dependency
        false,// version
        true// in footer

    );
    wp_enqueue_script(
        'kreo-waypoints', 
        get_theme_file_uri('assets/js/jquery.waypoints.min.js'),
        [],// dependency
        null,// version
        true// in footer
    );
    wp_enqueue_script(
        'kreo-validate', 
        get_theme_file_uri('assets/js/jquery.validate.min.js'),
        [],// dependency
        false,// version
        true// in footer
    );
    wp_enqueue_script(
        'kreo-fittext', 
        get_theme_file_uri('assets/js/jquery.fittext.js'),
        [],// dependency
        false,// version
        true// in footer
    );
    wp_enqueue_script(
        'kreo-placeholder', 
        get_theme_file_uri('assets/js/jquery.placeholder.min.js'),
        ['kreo-jquery'],// dependency
        false,// version
        true// in footer
    );
    wp_enqueue_script(
        'kreo-magnific-popup', 
        get_theme_file_uri('assets/js/jquery.magnific-popup.min.js'),
        ['kreo-jquery'],// dependency
        false,// version
        true// in footer
    );
    wp_enqueue_script(
        'kreo-main', 
        get_theme_file_uri('assets/js/main.js'),
        ['kreo-jquery'],// dependency
        false,// version
        true// in footer
    );


}
add_action('wp_enqueue_scripts', 'kreo_enqueue_scripts');

function kreo_register_sidebars(){

    register_sidebar([
        'id'=>'kreo-footer-1',
        'name'=>'kreo Footer 1',
        'description'=>'Foorter Contact us',
        'before-widget'=>'<div class="%2$s" id="%1$s" > ',
        'after-widget'=>'</div>',
        'before_title'=>'<h1>',
        'after_title'=>'</h1><hr />',
        
    ]);
    register_sidebar([
        'id'=>'kreo-footer-2',
        'name'=>'kreo Footer 2',
        'description'=>'Foorter Contact Details',
    ]);
    register_sidebar([
        'id'=>'kreo-footer-3',
        'name'=>'About kreo Footer 3',
        'description'=>'Foorter About details',
    ]);
    register_sidebar([
        'id'=>'kreo-right-sidebar',
        'name'=> __('Righe Sidebar','kreo'),
        'description'=>'Righe Sidebar for posts',
    ]);

}
add_action('widgets_init', 'kreo_register_sidebars');

function kreo_register_widgets(){
    include __DIR__ .'/include/widgets/newslette-widget.php';
    
    register_widget('NewsLetter_Widgets');
}
add_action('widgets_init', 'kreo_register_widgets');

