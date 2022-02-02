<?php
/*
Template Name: Page Template
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
                    <li class="breadcrumb-item"><a href="<?php site_url()?> "><?php _e('Home') ?></a></li>
                    <li class="breadcrumb-item active "><?php the_title(); ?></li>
                </ol>
            </div>


        </div>
    </div>
    <section class="single_content">

        <div class="row ">
            
            <div class='nine columns'>
                <div class="single_title_page"><?php the_title(); ?></div>


            </div>
            <div class="clear"></div>

           
            
            <div class="clear"></div>
            <div><?php the_content(); ?></div>
        <?php endif; ?>



      

        </div>
    </section>


    <?php
    get_footer();
    ?>