<?php get_header(); ?>
    <section id="content" role="main">
        <div class="single-post">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <header>
                    <a href="<?php get_home_url( $blog_id, $path, $scheme ); ?>"><h1><?php single_post_title(); ?></h1></a>
                    <h2><?php the_time('F jS, Y') ?></h2>
                </header>
                <div class="post-image">
                    <?php the_post_thumbnail( 'full'); ?>
                </div>
                <div class="post-content">
                    <p><?php
                    $content = get_the_content('Read more');
                    print $content;
                    ?></p>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
