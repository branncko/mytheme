<?php get_header ( ); ?>
<div class="container-fluid">
    <div class="row p-4 mt-1">
        <div class="col card alert-secondary mb-3">

            <h2 class="pl-5 mb-5">  <br><i class="fa fa-folder-open"></i> Arquivos: <?php single_cat_title(); ?> </h2>
                        <?php get_template_part('loop', 'downloads'); ?>
        </div>


    </div>

</div>



<?php get_footer ( ); ?>