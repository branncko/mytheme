<?php if( is_single() ) : ?>

    <div class="row mt-4">
    <div class="col-md-6 col-sm-12">
       
    </div>
    <div class="col-md-6 col-sm-12 mt-3 mt-md-0">
        <p>
            <span class="badge badge-lc-gray">Seu Dinheiro</span>
        </p>
        <h5>
            <a href="#"><?php the_title(); ?></a>
        </h5>
        <p class="mb-0"><?php the_content();?></p>
        <p class="text-muted mt-3"><i class="far fa-clock"></i><small>Publicado em <?php the_date(); ?></small></p>
    </div>

</div>

<?php else : ?>

<div class="row mt-4">
    <div class="col-md-6 col-sm-12">
        <a href="<?php the_permanlink(); ?>">
            <?php the_post_thumbnail( 'post-thumbnails', array('class' => 'img-fluid')); ?>

        </a>

    </div>

</div>

<?php endif; ?>



