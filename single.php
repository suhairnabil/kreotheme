<?php
get_header();

if (have_posts()) :
    the_post();
?>

    <div <?php post_class('single_top_banner')?> >

        <div class="row">


            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php site_url()?>"><?php _e('Home')?></a></li>
                    <li class="breadcrumb-item " aria-current="page"><?php the_category() ?></li>
                    <li class="breadcrumb-item active "><?php the_title(); ?></li>
                </ol>
            </div>


        </div>
    </div>
    <section class="single_content">

        <div class="row ">
            <div class='three columns'>
                <div class="single_nav_title"><i class="fa fa-calendar"></i> <?php _e('Puplished')?>: </div>
                <div class='get_titlle'> <?php echo get_the_date() ?> </div>
                <div class="single_nav_title"><i class="fa fa-list-ul"></i> <?php _e('Categories')?></div>
                <div class='get_titlle'> <?php the_category(" , ") ?></div>
              
            </div>
            <div class='nine columns'>
                <div class="single_title_page"><?php the_title(); ?></div>


            </div>
            <div class="clear"></div>

            <div class='nine columns'>
                <div class="sigle_image"> <?php the_post_thumbnail('full'); ?></div>
                <div class="author_img">
                    <?php echo  get_avatar(get_the_author_meta('email'), 155); ?>
                    <?php the_author_link() ?>  ||
                 </div>
                 <div class="single_tags"> <?php the_tags(null, " , ") ?></div>
            </div>
            <div class='three columns' style="margin-top:100px;">
                <div class='Previous_post'><?php previous_post_link('%link', '<span> Previous</span> <div class="prev_title"> %title </div>'); ?> </div>
                <div class='Previous_post'><?php next_post_link('%link', '<span>Next</span> <div class="prev_title"> %title </div> '); ?> </div>

            </div>
            <div class="clear"></div>
            <div><?php the_content(); ?></div>
        <?php endif; ?>



        <?php
        if (comments_open() || get_comments_number()) {
            comments_template();
        }

        ?>

        </div>
    </section>


    <?php
    get_footer();
    ?>