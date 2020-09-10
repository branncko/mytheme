<?php /* Template name: Página Inicial */  ?>

<?php get_header();?>

<div class="card border-0 text-white text-center">
    <img src="<?php echo get_post_meta(get_the_ID(), 'cmb2_banner_imagem', true); ?>" class="card-img banner-header"
        alt="imagem Banner ">
    <div class="card-img-overlay bg-banner-header p-0 m-0 row">
        <div class="col align-self-end">
            <p class="mb-0 lead"><?php echo get_post_meta(get_the_ID(), 'cmb2_banner_subtitulo', true); ?></p>
            <h1 class="mb-3"><?php echo get_post_meta(get_the_ID(), 'cmb2_banner_titulo', true); ?></h1>
            <p><a href="<?php echo get_post_meta(get_the_ID(), 'cmb2_banner_link', true); ?>"
                    class="btn btn-lg btn-lc-orange mb-3">Saiba mais</a></p>
        </div>
    </div>

</div>

<div class="container">
    <div class="row my-5 pt-5">

        <div class="col-lg-4 col-sm-6">
            <img src="./assets/image-1920x1080.jpg" class="img-fluid mb-3" alt="Imagem 01">
            <h5>
                <a href="#">Empréstimo Consignado</a>
            </h5>
            <p>As melhores taxas e condições para voce que deseja realizar todos os seus sonhos na melhor fase da vida
            </p>

            <p>
                <a href="#" class="btn btn-lc-orange">Saiba Mais</a>
            </p>
        </div>

        <div class="col-lg-4 col-sm-6">
            <img src="./assets/image-1920x1080.jpg" class="img-fluid mb-3" alt="Imagem 01 ">
            <h5>
                <a href="#">Empréstimo Consignado</a>
            </h5>
            <p>As melhores taxas e condições para voce que deseja realizar todos os seus sonhos na melhor fase da vida
            </p>

            <p>
                <a href="#" class="btn btn-lc-orange">Saiba Mais</a>

            </p>
        </div>

        <div class="col-xl-4 col-12 mt-3 mt-xl-0">
            <div class="card">
                <ul class="list-group list-group-flush">

                    <?php 

                        $page_args = array(
                        'post_type' => 'page', 
                        'post_parent' => '710, 22',
                        'posts_per_page' => '4'

                        );
                        $page_query = new WP_Query( $page_args );  ?>

                    <?php if( $page_query -> have_posts() ) : 
                        while ( $page_query -> have_posts() ) : 
                        $page_query->the_post(); ?>

                    <li class="list-group-item border-0">
                        <h5>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a>
                        </h5>
                        <p class="mb-0"><?php the_excerpt(); ?> </p>
                    </li>

                    <?php endwhile; ?>
                    <?php else : ?>
                    <li class="list-group-item border-0">
                        <h5>
                            Nenhuma solução cadastrada na index!
                        </h5>

                    </li>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-12">
            <h5 class="border-bottom  pb-2 mb-4"><i class="fas fa-newspaper"></i> Novidades</h5>

            <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

            <?php get_template_part('content', get_post_format());?>

            <?php endwhile; ?>
            <?php else : ?>
            <p class="lead">Nenhuma publicação encontrada!</p>

            <?php endif; ?>

            <?php wp_reset_query(); ?>

            <div class="mt-3 mb-4">
                <?php next_posts_link('Mais antigos'); ?>
                <?php previous_posts_link('Mais novos'); ?>
            </div>

        </div>
        <!-- Sidebar 2 -->
        <?php get_sidebar();?>
    </div>
</div>
<!-- caixas de Comentários  -->
<div class="bg-lc-gray py-4 mt-4 mb-md-0">
    <div class="container">
        <div class="row">

            <?php 

                    $args = array('post_type' => 'depoimentos', 
                    'posts_per_page' => 2
                    );
                    $the_query = new WP_Query( $args );
                ?>

            <?php if( $the_query -> have_posts() ) : 
                while ( $the_query-> have_posts() ) : 
                $the_query->the_post(); ?>

            <div class="col-md-6 col-sm-12 mb-4 mb-md-0">
                <div class="card border-card-footer">
                    <div class="card-body">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <div class="col-12">
                <p class="lead">
                    Nenhum Depoimento
                </p>
            </div>
            <?php endif; ?>
            <?php wp_reset_query(); ?>


        </div>
    </div>
</div>
<?php get_footer(); ?>