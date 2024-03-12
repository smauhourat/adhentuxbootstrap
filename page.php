<?php 
get_header()
?>
        <div class="row">
            <div class="col-lg-12">

                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                ?>
                    <div class="card mb-5" style="border: 0px">
                        <div class="card-body">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                            <p class="small mt-1 mb-0">Fecha: <?php the_date(); ?></p>
                            <p class="small mb-0">Autor: <?php the_author(); ?></p>
                            <p class="small">Categorias: <?php the_category(' / ') ?> Etiquetas: <?php the_tags('', ' / ', '') ?></p>
                            <!-- <img class="img-fluid mb-3" src="https://via.placeholder.com/1200x360"> -->
                            <?php the_post_thumbnail('post-thumbnail', [ 
	                            'class' => 'img-fluid mb-3', 
	                            'title' => 'Feature image',
                            ]); ?>
                            <p class="card-text"><?php the_content(); ?></p>
                        </div>
                    </div>

                <?php    
                    endwhile;
                endif;
                ?>            
            </div>
        </div>
    </div>
    <!-- fin blog -->

<?php 
get_footer()
?>