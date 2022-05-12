<?php get_header();?>

        <h1><?php pll_e("Búsqueda");?></h1>
        <?php
        while(have_posts()){
            the_post();?>
            <article>
                <h3><?php the_title();?></h3>
                <p><?php the_excerpt();?></p>
            </article>
        <?php }
        ?>
        <div class="nav-previous alignleft"><?php next_posts_link( 'Anteriores' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Siguientes' ); ?></div>
        <?php
        get_footer();?>