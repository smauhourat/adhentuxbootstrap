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
                        <a href="<?php the_permalink() ?>">
                            <h2 class="card-title"><?php the_title(); ?></h2>
                        </a>
                        <p class="small mt-1 mb-0">Fecha: <?php the_date(); ?></p>
                        <p class="small mb-0">Autor: <?php the_author(); ?></p>
                        <p class="small">Categorias: <?php the_category(' / ') ?> Etiquetas: <?php the_tags('', ' / ', '') ?></p>
                            <?php the_post_thumbnail('post-thumbnail', [ 
	                            'class' => 'img-fluid mb-3', 
	                            'title' => 'Feature image',
                            ]); ?>

                        <!-- <img class="img-fluid mb-3" src="https://via.placeholder.com/1200x360"> -->
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary">Mas Info</a>
                    </div>
                </div>

            <?php    
                endwhile;
            endif;
            ?>            
                <!-- 
                <div class="card mb-5" style="border: 0px">
                    <div class="card-body">
                        <a href="single.html">
                            <h2 class="card-title">Titulo de la entrada</h2>
                        </a>
                        <p class="small mt-1 mb-0">Fecha: 06-03-2024</p>
                        <p class="small mb-0">Autor: adhentux</p>
                        <p class="small">Categorias: <a href="#">Animales</a>/<a href="#">Comida</a> Etiquetas: <a
                                href="#">Azul</a>/<a href="#">Verde</a></p>
                        <img class="img-fluid mb-3" src="https://via.placeholder.com/1200x360">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                        <a href="single.html" class="btn btn-primary">Mas Info</a>
                    </div>
                </div>

                <div class="card mb-5" style="border: 0px">
                    <div class="card-body">
                        <a href="single.html">
                            <h2 class="card-title">Titulo de la entrada</h2>
                        </a>
                        <p class="small mt-1 mb-0">Fecha: 06-03-2024</p>
                        <p class="small mb-0">Autor: adhentux</p>
                        <p class="small">Categorias: <a href="#">Animales</a>/<a href="#">Comida</a> Etiquetas: <a
                                href="#">Azul</a>/<a href="#">Verde</a></p>
                        <img class="img-fluid mb-3" src="https://via.placeholder.com/1200x360">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                        <a href="single.html" class="btn btn-primary">Mas Info</a>
                    </div>
                </div> -->

                <?php get_template_part('template-parts/content', 'pagination') ?>
                
                <!-- <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#">anterior</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">siguiente</a>
                        </li>
                    </ul>
                </nav> -->

            </div>
            <?php get_sidebar(); ?>
            <!-- <div class="col-lg-3">
                <div class="card-body">
                    <h4>Publicidad</h4>
                    <hr>
                    <img src="https://via.placeholder.com/360x600" alt="" class="img-fluid">
                </div>
            </div> -->

        </div>
    </div>
    <!-- fin blog -->

<?php 
get_footer()
?>