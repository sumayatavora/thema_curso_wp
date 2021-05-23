<article <?php post_class() ?>>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	by <?php the_author_posts_link(); ?></p>
	
	<?php if(has_category() ): ?>
	<p><?php _e('Categories:', 'wpcursos'); ?> <?php the_category( ' ' ); ?></p>
	<?php endif; ?>
	<p><?php the_tags( __( 'Tags: ', 'wpcurso' ), ', ' ); ?></p>
	<?php the_excerpt(); ?>
</article>