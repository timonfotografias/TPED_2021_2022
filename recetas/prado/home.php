<?php get_header();?>


        <h1><?php pll_e("Inicio");?></h1>
        <?php while(have_posts()){
            the_post();?>
            <article>
                <h3><?php the_title();?></h3>
                <p><?php the_excerpt();?></p>
                <a href="<?php the_permalink();?>"><?php pll_e("Leer más…");?></a>
            </article>
        <?php }
        get_footer();?>