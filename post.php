<article>
        <?php if (!is_page()): ?>
                <time datetime="<?php the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
        <?php endif; ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
</article>
