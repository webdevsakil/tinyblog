<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php while (have_posts()) : the_post(); ?>
                <div <?php post_class(); ?>>
                    <div class="post-preview">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="post-title">
                                <?php the_title(); ?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?php the_excerpt(); ?>
                            </h3>
                        </a>
                        <p class="post-meta"> <?php _e("Posted by", "alpha") ?>
                            <cite><?php the_author(); ?></cite> <br /> <?php echo get_the_date(); ?>
                        </p>
                    </div>
                    <hr>
                </div>

                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">
                       Older Posts
                        &rarr;
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>