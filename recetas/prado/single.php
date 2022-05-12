<?php get_header();?>

        <h1><?php pll_e("Entrada");?></h1>
        <?php while(have_posts()){
            the_post();?>
            <article>
                <h3><?php the_title();?></h3>
                <?php if(!empty(get_field('autor')) && !empty(get_field('ano'))){?>
                    <h4><?php the_field('autor'); ?>, (<?php the_field('ano'); ?>)</h4>
                    <?php }?>
                <?php if(!empty(get_field('nacimiento')) && !empty(get_field('muerte')) && !empty(get_field('pais'))){?>
                    <h4><?php the_field('nacimiento'); ?>-<?php the_field('muerte'); ?>, (<?php the_field('pais'); ?>)</h4>
                <?php }?>
                <?php the_post_thumbnail(array(200,auto));?>
                <p><?php the_content();?></p>
            </article>
        <?php }
        get_footer();?>