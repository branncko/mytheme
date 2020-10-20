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
        <table class="table table-hover align-items-center" id="example">
            <thead>
                <tr>
                    <th scope="col" class="col-md-4">Título</th>
                    <th scope="col">Data de publicação</th>
                    <th scope="col">Pre-visualização</th>
                    <th scope="col">Detalhes</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                                $args = array(  
                                'post_type' => 'downloads',
                                'post_status' => 'publish',
                                'posts_per_page' => -1, 
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
                                        echo get_the_excerpt( ) ;
                                        
                                        break;

                                    case 'col1':
                                        echo get_the_date();
                                        break;  

                                    case 'col2':
                                        
                                      echo the_post_thumbnail('thumbnail', array('class' => 'img-fluid my-3 justify-content-center') );
                                        break;
                                   
                                                                            
                                    case 'col3' :
                                        echo "<a class=\"btn btn-primary\" href='".get_the_permalink()."' role=\"button\"> Visualizar </a>" ;  
                                        break;

                            }}
                            
                                        ?>


                    </td>
                    <?php } endwhile; ?>

                </tr>

            </tbody>

        </table>



    </div>
</div>