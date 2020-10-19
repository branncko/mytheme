<!-- Adiciona o cabeçalho (header.php) -->
<?php get_header(); ?>
<div class="mh-wrapper clearfix">
		<div class="mh-main clearfix">
				<div id="main-content" class="mh-loop mh-content" role="main">
					<?php 

					get_template_part('loop', 'downloads'); 	
					?>
				</div>		
		</div>
				
</div>

<!-- Adiciona o rodapé (footer.php) -->
<?php get_footer(); ?>