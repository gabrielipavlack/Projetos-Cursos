<?php 
// Template Name: Sobre
get_header();
?>

<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

		<section class="missao_sobre container animar-interno">
			<div class="grid-10">
				<h2 class="subtitulo-interno"><?php the_field('titulo_primeiro_texto_sobre'); ?></h2>
				<p><?php the_field('primeiro_texto_sobre'); ?></p>
			</div>
			<div class="grid-6">
				<h2 class="subtitulo-interno"><?php the_field('titulo_segundo_texto_sobre'); ?></h2>
					<?php the_field('segundo_texto_sobre'); ?>
			</div>
			<div class="grid-16 foto-equipe">
				<img src="<?php the_field('imagem_equipe_sobre'); ?>" alt="Equipe Bikcraft">
			</div>
		</section>
		
		<?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>

		<?php endwhile; else: endif ; ?>
<?php get_footer(); ?>