<?php 
// Template Name: Sobre
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="container sobre">
	<h2 class="subtitulo"><?php the_title(); ?></h2>

	<div class="grid-8">
		<img src="<?php the_field('foto_pagina_sobre'); ?>" alt="<?php the_field('descricao_foto_pagina_sobre'); ?>">
	</div>

	<div class="grid-8">
<!-- SEM A VERSÃO PRO DO ACF, SEM O REPEATER FIELD: (nesse caso até pode fazer assim porque são poucos campos, entretanto dessa forma
não tem a possibilidade de adicionar novos campos, o que é necessário para um menu, por exemplo )-->
<!-- usar o repeater field para campos estilizados igualmente -->
		<h2><?php the_field('titulo_historia'); ?></h2>
		<p><?php the_field('texto_historia'); ?></p>
	
		<h2><?php the_field('titulo_visao'); ?></h2>
		<p><?php the_field('texto_visao'); ?></p>

		<h2><?php the_field('titulo_valores'); ?></h2>
		<p><?php the_field('texto_valores'); ?></p>
	
	</div>
</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>