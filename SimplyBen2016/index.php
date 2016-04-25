<?php get_header(); ?>
<div class="simply-page">
<a href="http://simplyben.co.uk"><h1>Benjamin Heap's Blog</h1></a>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="simply-panel">
            <a href="<?php echo get_permalink(); ?>">
                <div class="simply-panel-image">
                    <span><?php the_post_thumbnail( 'full'); ?></span>
                    <h2><?php the_title(); ?></h2>
                </div>
            </a>
            <div class="simply-panel-text">
                <p class="date"><?php the_time('F jS, Y') ?></p>
                <div class="excerpt"><?php the_excerpt(); ?></p></div>
                <a href="<?php echo get_permalink(); ?>">Read More</a>
            </div>
        </div>
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
</div>
<?php get_footer(); ?>
