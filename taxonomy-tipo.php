<?php get_header(); ?>
<div class="container">
    <div class="row p-4 mt-1">

        <div class="col card alert-secondary mb-3">
            <h1>Teste na taxomys</h1>

            <h2 class="pl-5 my-2"> <i class="fa fa-folder-open"></i> <?php single_cat_title(); ?> </h2>

            <?php if( have_posts() ) : while ( have_posts()) : the_post(); ?>


            <h1 class="mt-5 mb-4">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
            </h1>
            <?php the_excerpt(); ?>




            <?php endwhile; ?>


            <?php else : print '<div class=" mt-3 alert alert-danger" role="alert">
            <h4 class="h1 alert-heading text-center">'; single_cat_title(); echo '</h4>
            <p>Parece não temos nada que preencha os requisitos da sua busca.</p>
            <hr>
            <p class="mb-0">Por favor procure em outras categorias.</p>
            </div> '; endif; ?>



            <div class="mt-3 mb-4">
                <?php next_posts_link('Mais antigos'); ?>
                <?php previous_posts_link('Mais novos'); ?>
            </div>

        </div>

        <?php get_sidebar();?>
    </div>


</div>



<?php get_footer(  );?>