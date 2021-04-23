<?php get_header(); ?>

<body>

    <?php get_template_part("/templates/nav") ?>
    <!-- Page Header -->
    <?php while (have_posts()) : the_post();
        if (has_post_thumbnail()) {
            $tiny_the_post_feat_image = get_the_post_thumbnail_url(null, "large");
        } else {
            $tiny_the_post_feat_image = "";
        }
    ?>
        <header class="masthead" style="background-image: url('<?php echo $tiny_the_post_feat_image; ?>')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1><?php the_title(); ?></h1>
                            <h2 class="subheading"><?php the_excerpt(); ?></h2>
                            <span class="meta"> <?php _e("Posted by", "tiny") ?>
                                <a href="#">
                                    <strong><?php the_author(); ?></strong> </a>
                                <br>
                                <?php echo get_the_date(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Post Content -->
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
    <hr>

    <?php get_footer(); ?>