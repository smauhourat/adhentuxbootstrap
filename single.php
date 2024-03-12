<?php 
get_header()
?>
        <div class="row">
            <div class="col-lg-9">

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
                            <?php 
                                if (comments_open() || get_comment($comment, $output) ) {
                                    comments_template();
                                }
                            ?>
                        </div>
                    </div>

                <?php    
                    endwhile;
                endif;
                ?>            
            </div>
            <div class="col-lg-3">
                <div class="card-body">
                    <h4>Publicidad</h4>
                    <hr>
                    <img src="https://via.placeholder.com/360x600" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
    <!-- fin blog -->

<?php 
get_footer()
?>