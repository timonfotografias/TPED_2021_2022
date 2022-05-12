<?php get_header();?>

        <h1><?php pll_e("Página");?></h1>
        <?php while(have_posts()){
            the_post();?>
            <article>
                <h3><?php the_title();?></h3>
                <p><?php the_content();?></p>
            </article>
        <?php }
        
        get_footer();?>