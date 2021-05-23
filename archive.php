<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="content-area">
	<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						
						<div class="archive col-md-8">
							<?php 

							the_archive_title( '<h1 class="archive-title">', '</h1>' );
							the_archive_description();
				
					//Se houver algum post
					if( have_posts() ):
						//enquanto houver post
						while(have_posts() ): the_post();
					?>
					<?php get_template_part('template-parts/content', 'archive');?>
					<?php
						endwhile;
						?>
						<!-- criando as setas de passar os post na pagina do blog -->
						<div class="row">
							<div class="pages text-left col-6"><?php previous_posts_link(__("<< Newer post",'wpcurso') ); ?>
							</div>
							<div class="pages text-rigth col-6"><?php next_posts_link(__(" Older posts >>", 'wpcurso')); ?>
							</div>
						</div>
					<?php	
					else:
					?>
					<p><?php e_('There&rsquo;s nothing yet to be displayed...', 'wpcurso'); ?></p>
				<?php endif; ?>
				</div>
				<?php get_sidebar( 'blog' ); ?>	
			</div>
		</div>
		</section>
 	</main>
</div>
<?php get_footer(); ?>