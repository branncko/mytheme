<?php /* Template for displaying content in MH Posts List widget and on archives */ ?>
<article <?php post_class('clearfix'); ?>>
	<div class="clearfix">
		<header class="mh-posts-list-header">
			<span class="tags-list"><?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name . ' '; } } ?></span><span class="date-list"><?php echo get_the_date(); ?></span>
			<h3 class="entry-title mh-posts-list-title" style="margin-top: 10px">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h3>
		</header>
		<div class="mh-posts-list-excerpt clearfix">
			<?php the_excerpt(); ?>
		</div>
	</div>
</article>