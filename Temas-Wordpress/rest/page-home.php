<?php 
// Template Name: Menu da semana
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="container">
	<h2 class="subtitulo"><?php the_title(); ?></h2>

<?php if(have_rows('categorias_menu')) : while(have_rows('categorias_menu')) : the_row(); ?>
			<div class="menu-item grid-8">
				<h2><?php the_sub_field('nome_categoria'); ?></h2>
				<ul>
				<?php if(have_rows('pratos_categoria')) : while(have_rows('pratos_categoria')) : the_row(); ?>
					<li>
						<span><sup>R$</sup><?php the_sub_field('valor_prato'); ?></span>
						<div>
							<h3><?php the_sub_field('nome_prato'); ?></h3>
							<p><?php the_sub_field('descricao_prato'); ?></p>
						</div>
					</li>
					<?php endwhile; else: endif; ?>
				</ul>
			</div>
<?php endwhile; else: endif; ?>

		</section>

		<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
    <?php get_footer(); ?>