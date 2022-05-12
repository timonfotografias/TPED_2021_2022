<?php get_header();?>

        <h1><?php pll_e("Página Frontal");?></h1>
        <?php while(have_posts()){
            the_post();?>
            <article>
                <h3><?php the_title();?></h3>
                <p><?php the_content();?></p>
            </article>
        <?php }
        $filtro = new WP_Query(array('category_name' => 'autores', 'posts_per_page' => 2));
        $filtro2 = new WP_Query(array('category_name' => 'obras', 'posts_per_page' => 3));
        ?>
        <h3 class="seccion"><?php pll_e("2 Últimas entradas de artistas");?></h3>
        <?php
        if($filtro->have_posts()){
            while($filtro->have_posts()){
                $filtro->the_post();?>
                <h3><?php the_title();?></h3>
                <p><?php the_excerpt();?></p>
                <a href="<?php the_permalink();?>"><?php pll_e("Leer más…");?></a>
                <?php
            }
            wp_reset_postdata();
        }else{
            echo'Todavía no hay posts de artistas.';
        }
        ?>
        <h3 class="seccion"><?php pll_e("3 Últimas entradas de obras");?></h3>
        <?php
        if($filtro2->have_posts()){
            while($filtro2->have_posts()){
                $filtro2->the_post();?>
                <h3><?php the_title();?></h3>
                <p><?php the_excerpt();?></p>
                <a href="<?php the_permalink();?>"><?php pll_e("Leer más…");?></a>
                <?php
            }
            wp_reset_postdata();
        }else{
            echo'Todavía no hay posts de obras.';
        }
        get_footer();?>