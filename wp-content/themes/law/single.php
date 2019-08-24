<?php get_header(); ?>
<div id="fh5co-blog" class="fh5co-bg-section" style="background-color:#fcfcfc;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ( have_posts() ) : while( have_posts() ) : the_post();  ?>
                        <?php
                        if (has_post_thumbnail()) { // если лого есть, то использ. его адрес
                            $img_url = get_the_post_thumbnail_url();
                        } else { // если лого нет, то картинка по умолч.
                            $img_url = get_template_directory_uri() . '/assets/images/moon.jpg';
                        }
                    ?>
                    <h1><?php the_title(); ?></h1>
                    <img class="pull-left low-post-image" src="<?php echo $img_url; ?>" alt="<?php the_title(); ?>">

                    <?php the_content(); ?>
                
                    <?php
                        if ( comments_open() || get_comments_number()) {
                            comments_template('/comments.php');
                        }
                    ?>
                <?php endwhile; ?>
                    <!-- post navigation -->
                <?php else: ?>
                    <!-- no posts found -->
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
