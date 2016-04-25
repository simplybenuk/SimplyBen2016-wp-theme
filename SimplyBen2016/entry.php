<div class="col-sm-3 col-md-3">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="panel">
            <div class="panel-image">
                <?php the_post_thumbnail( 'full' ); ?>
                <h2><?php single_post_title( 'Current post: ' ); ?></h2>
            </div>
            <p><?php the_date(); ?></p>
            <p><?php $excerpt = get_the_excerpt() ?></p>
            <p><?php the_category( $separator, $parents, $post_id ); ?> </p>
            <i class="fa fa-camera-retro"></i>
           </div>
        </div>
    </article>
</div>
