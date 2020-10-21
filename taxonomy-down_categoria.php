<!-- Adiciona o cabeçalho (header.php) -->
<?php get_header(); ?>
<div class="container clearfix">
	<div class="row  clearfix">
		<div class="col col-lg-10">

				<?php get_template_part('loop', 'downloads'); ?>
	</div>		
		</div>
				 <?php get_sidebar(); ?> 
</div>

<!-- Adiciona o rodapé (footer.php) -->
<?php get_footer(); ?>