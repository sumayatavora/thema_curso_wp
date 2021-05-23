<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="content-area">
	<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						
						<div class="category col-md-8">
							<?php 

							the_archive_title( '<h1 class="category-title">', '</h1>' );
							the_archive_description();
				
					//Se houver algum post
					if( have_posts() ):
						//enquanto houver post
						while(have_posts() ): the_post();
					?>
					<?php get_template_part('template-parts/content', 'category');?>
					<?php
						endwhile;
						?>
						<!-- criando as setas de passar os post na pagina do blog -->
						<div class="row">
							<div class="pages text-left col-6"><?php previous_posts_link("<< Newer post"); ?>
							</div>
							<div class="pages text-rigth col-6"><?php next_posts_link(" Older posts >>"); ?>
							</div>
						</div>
					<?php	
					else:
					?>
					<p>There's nothing yet to be displayed...</p>
				<?php endif; ?>
				</div>
				<?php get_sidebar( 'blog' ); ?>	
			</div>
		</div>
		</section>
 	</main>
</div>
<?php get_footer(); ?>