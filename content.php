<?php if(is_single()) : ?>
<div class="row mt-4">
    <div class="col-md-6 col-sm-12">
        <img src="./assets/image-1920x1080.jpg" class="img-fluid" alt="Imagem 01">
    </div>
    <div class="col-md-6 col-sm-12 mt-3 mt-md-0">
        <p>
            <span class="badge badge-lc-gray">Seu Dinheiro</span>
        </p>
        <h5>
            <a href="#">A culpa é do STF. Bolsonaro tem razão</a>
        </h5>
        <p class="mb-0">As melhores taxas e condições para voce que deseja realizar todos os seus sonhos na
            melhor
            fase da vida.</p>
        <p class="text-muted mt-3"><i class="far fa-clock"></i><small>Publicado em 11 de agosto de
                2020</small></p>
    </div>
</div>

<?php else : ?>

<div class="row mt-4">
    <div class="col-md-6 col-sm-12">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid') ); ?>
        </a>
    </div>
    <div class="col-md-6 col-sm-12 mt-3 mt-md-0">
        <p>
            <span class="badge badge-lc-gray"><?php the_category('|');?>
            </span>
        </p>
        <h5>
        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
        </h5>
        <?php the_excerpt(); ?>
    </div>
</div>
<?php endif; ?>