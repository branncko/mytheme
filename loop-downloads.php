<?php
$cols = 'lic-col0|lic-col1|lic-col2|lic-col3';
$colheads = "Contrato|Contratante|Exercício|Início da Vigência|Valor Global|Objeto|Documento";
$cols = explode("|", $cols);
$colheads = explode("|", $colheads);
foreach ($cols as $index => &$col){
   $col = explode(",", $col);
   $colheads = !isset($colheads[$index])?$col[0]:$colheads[$index];
}; ?>
<!--links estilo e script -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="<?php bloginfo('template_directory'); ?>/DataTables/jQuery-1.12.4/jquery-1.12.4.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js">
</script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>

<!-- Script tabela -->


<!-- cabeçalho -->
<div class="container">
    <div class="row bg-dark p-5 text-white">
        <p class="lead">Pesquisa</p>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Número<br>Modalidade</th>
                    <th scope="col">Publicação<br>Objeto</th>
                    <th scope="col">Abertura</th>
                    <th scope="col">Detalhes</th>
                </tr>
            </thead>

            <tbody>

                <?php
			
									
					while ( have_posts() ) : the_post();?>
                <tr>
                    <?php
                        $tcols = $cols;
                        array_shift($tcols);
                        foreach ($cols as $colx => $cold){ ?>

                    <td>
                        <?php 
                            $sobre_grupo = get_field('sobre');
                            $abertura_grupo = get_field('abertura');
                            $publicacao_grupo = get_field('publicacao');
                            $responsaveis_grupo = get_field('responsaveis');

                            foreach ($cold as $cx => $c){
                                $cxc = ($cx > 0)?'|':'|';
                                switch ($c) {
                                    case 'lic-col0':
										echo '<strong>'; echo get_the_title(); echo '</strong>';
                                        echo '</br>';										
                                        echo $sobre_grupo['modalidade'];
                                        break;

                                    case 'lic-col1':
                                        echo '<strong>';echo $sobre_grupo['publicacao_do_aviso'];echo '</strong>';
                                        echo '</br>';
                                        echo the_field("objeto") ; 
                                        break;  

                                    case 'lic-col2':
                                        echo '<strong>';echo $abertura_grupo['data_de_abertura'];echo '</strong>';
                                        break;
                                   
                                                                            
                                    case 'lic-col3' :
                                        echo "<a class=\"botao\" href='".get_the_permalink()."' role=\"button\"> Visualizar </a>" ;  
                                        break;

                            }}
                            
                                        ?>


                    </td>
                    <?php } endwhile; ?>

                </tr>

            </tbody>

        </table>

        <script>
        $(document).ready(function() {
            $('#table-documentos').DataTable({
                "language": {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sSearch": "Pesquisar",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                },
                "ordering": false,
                dom: '<lB<rt>ip>',
                buttons: [{
                        extend: 'copy',
                        text: '<i class="fa fa-copy"></i> COPIAR'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i> IMPRIMIR'
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fa fa-file-pdf-o"></i> PDF'
                    },
                    {
                        extend: 'csv',
                        text: '<i class="fa fa-file-text-o"></i> CSV'
                    },
                    {
                        extend: 'excel',
                        text: '<i class="fa fa-file-excel-o"></i> EXCEL'
                    },
                ],

                select: false
            });
        });

        function filterGlobal() {
            $('#table-documentos').DataTable().search(
                $('#global_filter').val()

            ).draw();
        }

        function filterColumn(i) {
            $('#table-documentos').DataTable().column(i).search(
                $('#col' + i + '_filter').val()

            ).draw();
        }

        $(document).ready(function() {
            $('#table-documentos').DataTable();

            $('input.global_filter').on('keyup click', function() {
                filterGlobal();
            });

            $('input.column_filter').on('keyup click', function() {
                filterColumn($(this).parents('div').attr('data-column'));
            });
        });
        </script>

    </div>
</div>