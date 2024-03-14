<?php 
get_header()
?>
        <div class="row">
            <div class="col-lg-9">

            <h3 class="bg-primary text-white py-3 mb-5 text-center">Resultados de busqueda</h3>

            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
            ?>
                <div class="card mb-5" style="border: 0px">
                    <div class="card-body">
                        <a href="<?php the_permalink() ?>">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                        </a>
                    </div>
                </div>

            <?php    
                endwhile;
            ?>            
            <?php 
                else:
            ?>
            <h5>No se encontro resultados...</h5>
            <?php 
                endif;
            ?>
  
                <?php get_template_part('template-parts/content', 'pagination') ?>
  
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
    <!-- fin blog -->

<?php 
get_footer()
?>