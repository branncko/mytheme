<?php get_header(); ?>

<div class="container">
    <div class="row my-2 pt-2">
        <div class="col-lg-8 col-12">

            <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

            <h1 class="mt-3 mb-2"><?php the_title(); ?></h1>

            <!-- <?php the_post_thumbnail('full', array('class' => 'center img-fluid mb-3') ); ?> -->

            <img src="<?php the_field('cmb2_down_imagem');?>" alt="iamgem" class="img-fluid mb-3 p-2 card">

            <p class="card text-muted mt-3"><?php the_excerpt();?></p>

            

            <div class="well hidden-xs" id="sidebar">
            <h4 id="sidebarh4">Informacion:</h4>
            <i class="fa fa-user"></i> <a
                href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a><br>
            <i class="fa fa-folder-open"></i> <?php the_category(','); ?><br>
            <i class="fa fa-comments" aria-hidden="true"></i>
            <?php comments_number( 'no responses', 'one response', '% responses' ); ?><br>
            <i class="fa fa-eye" aria-hidden="true"></i> 
            <i class="fa fa-clock-o"></i> Publicado as <?php the_time(); ?> de <?php the_date('d/m/Y  '); ?> <br>
            <i class="fas fa-edit"  aria-hidden="true"></i> Última alteração:
            <?php the_modified_date(' d \d\e F \d\e Y \a\s H:i:s'); ?><br>
        </div>

            <p><a href="<?php the_field('cmb2_down_link'); ?>" target="_blank"
                    class="btn btn-lg btn-lc-orange mb-3 mt-2">Baixar</a>
            </p>

            <div class="mt-3 mb-4">
                <?php next_posts_link('Mais antigos'); ?>
                <?php previous_posts_link('Mais novos'); ?>
            </div>

            <!-- cmb2_down_imagem -->


            <?php endwhile; ?>

            <?php else : echo 'Nenhum arquivo'; endif; ?>






        </div>
        <?php get_sidebar();?>

    </div>
</div>

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