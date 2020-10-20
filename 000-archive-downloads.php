<!-- Adiciona o cabeçalho (header.php) -->
<?php get_header(); ?>
<div class="container">
		<div class="row">
				<div class="col" role="main">
					<p class="h1 text-primary"><?php echo get_the_title(); ?></p>
					<?php 

					get_template_part('loop'); 	
					?>
				</div>		
		</div>
				
</div>

<!-- Adiciona o rodapé (footer.php) -->
<?php get_footer(); ?>