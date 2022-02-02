<?php
/*
Template Name: Right Side Posts
Template Post Type: page,post
*/

get_header();

if (have_posts()) :
    the_post();
?>

    <div class='single_top_banner'>

        <div class="row">


            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php site_url() ?> "><?php _e('Home') ?></a></li>
                    <li class="breadcrumb-item active "><?php the_title(); ?></li>
                </ol>
            </div>


        </div>
    </div>

    <section class="single_content">
        <div class="row ">
            <div class="eight columns">
                <div class="single_title_page"><?php the_title(); ?></div>
                <div class="clear"></div>
                <div><?php the_content(); ?></div>
            <?php endif; ?>

            </div>
            <div class="four columns" style="border-left: 1px #ccc solid;">
                <h1 class='sidebar_title'><?php _e('Latest Post') ?></h1>
                <!--  <?php dynamic_sidebar('kreo-right-sidebar') ?> -->
                <?php

                $sidebar_post_loop = new WP_Query([
                    'cat' => [1, 2, 3, 4, 5],
                    'posts_per_page' => 4,
                    'post_status' => 'Published',

                    'orderby'        => 'rand',
                    'posts_per_page' => '5',
                ]);
                if ($sidebar_post_loop->have_posts()) :
                    while ($sidebar_post_loop->have_posts()) :
                        $sidebar_post_loop->the_post();
                ?>
                        <div class="sidebar_boxes">
                        <?php if( has_post_thumbnail() ){
                            ?>
                            <div class="sidebar_the_image"> <?php the_post_thumbnail('medium') ?> </div>
                            <?php  }  ?>   
                        
                     
                            <div class="sidebar_the_title"><h3><?php the_title(); ?> </h3></div>
                            <div class="sidebar_the_cat"> <?php the_category(" , ") ?></p> </div>
                            <div class="sidebar-link-icon"><a href="<?php the_permalink() ?>"> <i class=" fa fa-plus"></i><?php _e('Read More') ?></a></div>

                        </div> <!-- item end -->

                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>

            </div>
        </div>
        <div class="clear"></div>
    </section>



    <?php
    get_footer();
    ?>