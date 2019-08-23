<?php get_header(); ?>

<div id="fh5co-blog" class="fh5co-bg-section" style="background-color:#fcfcfc;">
    <div class="container">
        <div class="row">
	        <?php if ( have_posts() ) : while( have_posts() ) : the_post();  ?>
                <div class="col-lg-4 col-md-4 my-col">
                    <div class="fh5co-blog animate-box">
                        <a href="<?php the_permalink(); ?>">
					        <?php
					        if (has_post_thumbnail()) { // если лого есть, то использ. его адрес
						        $img_url = get_the_post_thumbnail_url();
					        } else { // если лого нет, то картинка по умолч.
						        $img_url = get_template_directory_uri() . '/assets/images/moon.jpg';
					        }
					        ?>

                            <img src="<?php echo $img_url; ?>" alt="<?php the_title(); ?>">
                        </a>
                        <div class="blog-text">
                            <span class="posted_on"><?php the_time('j M'); ?></span>
                            <span class="comment"><a href=""><?php echo get_comments_number(); ?><i class="icon-speech-bubble"></i></a></span>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_content(''); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary my-btn"><?php _e('Read More', 'law'); ?></a>
                        </div>
                    </div>
                </div>
	        <?php endwhile; ?>
                <!-- post navigation -->
	        <?php else: ?>
                <!-- no posts found -->
	        <?php endif; ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
