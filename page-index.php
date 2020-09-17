<?php /* Template name: Página Inicial */  ?>

<?php get_header();?>

<div class="card border-0 text-white text-center">
    <img src="<?php the_field('cmb2_banner_imagem'); ?>" class="card-img banner-header" alt="imagem Banner ">
    <div class="card-img-overlay bg-banner-header p-0 m-0 row">
        <div class="col align-self-end">
            <p class="mb-0 lead"><?php the_field('cmb2_banner_subtitulo'); ?></p>
            <h1 class="mb-3"><?php echo get_post_meta(get_the_ID(), 'cmb2_banner_titulo', true); ?></h1>
            <p><a href="<?php the_field('cmb2_banner_link'); ?>" class="btn btn-lg btn-lc-orange mb-3">Saiba mais</a>
            </p>
        </div>
    </div>

</div>

<div class="container">
    <div class="row my-5 pt-2">

        <?php 

            $down_args = array(
            'post_type' => 'downloads', 
            'posts_per_page' => '2'

            );
            $down_query = new WP_Query( $down_args );  ?>

        <?php if( $down_query -> have_posts() ) : 
            while ( $down_query -> have_posts() ) : 
            $down_query->the_post(); ?>

        <div class="col-lg-4 col-sm-6">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('large', array('class' => 'img-fluid mb-3') ); ?> </a>

            <h5>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a>
            </h5>
            <p class="mb-0"><?php the_excerpt(); ?> </p>
        </div>

        <?php endwhile; ?>
        <?php else : ?>
        <div class="col-lg-4 col-sm-6">
            <h5>
                Nenhum download cadastrado!
            </h5>

        </div>
        <?php endif; ?>
        <?php wp_reset_query(); ?>

        <div class="col-xl-4 col-12 mt-3 mt-xl-0">
            <div class="card">
                <ul class="list-group list-group-flush">

                    <?php 

                        $page_args = array(
                        'post_type' => 'page', 
                        // 'post_parent' => '710, 22',
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
                    <!-- <?php wp_reset_query(); ?> -->

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-12">
            <h5 class="border-bottom  pb-2 mb-4"><i class="fas fa-newspaper"></i> Novidades</h5>

            <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>

            <?php if ( in_category( '-3' ) ) : ?>
            <div class="post-cat-three">
                <?php else : ?>
                <div class="post">
                    <?php endif; ?>
                    <!-- Display the Title as a link to the Post's permalink. -->

                    <h2><a href="<?php the_permalink(); ?>" rel="bookmark"
                            title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


                    <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

                    <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


                    <!-- Display the Post's content in a div box. -->

                    <div class="entry">
                        <?php the_content(); ?>
                    </div>


                    <!-- Display a comma separated list of the Post's Categories. -->

                    <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
                </div> <!-- closes the first div box -->


                <!-- Stop The Loop (but note the "else:" - see next line). -->

                <?php endwhile; else : ?>


                <!-- The very first "if" tested to see if there were any Posts to -->
                <!-- display.  This "else" part tells what do if there weren't any. -->
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


                <!-- REALLY stop The Loop. -->
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