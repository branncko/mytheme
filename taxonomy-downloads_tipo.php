<?php get_header(); ?>
<div class="container-fluid">
    <div class="row p-4 mt-1">
        <div class="col card alert-secondary mb-3">

            <h2 class="pl-5 my-2"> <i class="fa fa-folder-open"></i> <?php single_cat_title(); ?> </h2>

            <?php get_template_part('loop', 'downloads'); ?>

            <!-- <?php  print '<div class=" mt-3 alert alert-danger" role="alert">
            <h4 class="h1 alert-heading text-center">'; single_cat_title(); echo '</h4>
            <p>Parece não temos nada que preencha os requisitos da sua busca.</p>
            <hr>
            <p class="mb-0">Por favor procure em outras categorias.</p>
            </div> ';?> -->

            <!-- <div class="mt-3 mb-4">
                <?php next_posts_link('Mais antigos'); ?>
                <?php previous_posts_link('Mais novos'); ?>
            </div> -->

        </div>

      
    </div>


</div>



<?php get_footer(  );?>