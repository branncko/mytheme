<?php
$cols = 'col0|col1|col2|col3';

$cols = explode("|", $cols);

foreach ($cols as $index => &$col){
   $col = explode(",", $col);
   $colheads = !isset($colheads[$index])?$col[0]:$colheads[$index];
}; ?>



<!-- cabeçalho -->
<div class="container">
    <div class="row">
        <table class="col-md table table-hover align-items-center">
            <thead>
                <tr>
                    <th scope="col" class="col-sm col-md">Título</th>
                    <th scope="col">Pre-visualização</th>
                    <th scope="col">Detalhes</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                                $args = array(  
                                'post_type' => 'downloads',
                                'post_status' => 'publish',
                                'posts_per_page' => 5, 
                                'orderby' => 'date', 
                                'order' => 'DESC',
                            );
                        
                            $loop = new WP_Query( $args ); 
                                
                            while ( $loop->have_posts() ) : $loop->the_post();?>



                <tr>
                    <?php
                        $tcols = $cols;
                        array_shift($tcols);
                        foreach ($cols as $colx => $cold){ ?>

                    <td>
                        <?php 
                           
                            foreach ($cold as $cx => $c){
                                $cxc = ($cx > 0)?'|':'|';
                                switch ($c) {
                                    case 'col0':
                                        echo '<strong>'; echo get_the_title() . '</strong> </br>'; 
                                        echo get_the_excerpt( ) . '</br>' ;
                                         echo get_the_date();
                                        break;
                               
                                    case 'col1':
                                        
                                      echo the_post_thumbnail('thumbnail', array('class' => 'img-fluid my-3 justify-content-center') );
                                        break;
                                   
                                                                            
                                    case 'col2' :
                                        echo "<a class=\"btn btn-primary align-items-center\" href='".get_the_permalink()."' role=\"button\"> Visualizar </a>" ;  
                                        break;

                            }}
                            
                                        ?>


                    </td>
                    <?php } endwhile; ?>

                </tr>

            </tbody>

        </table>

        <div class="mt-3 mb-4">
            <?php next_posts_link('Mais antigos'); ?>
            <?php previous_posts_link('Mais novos'); ?>
        </div>


    </div>
</div>