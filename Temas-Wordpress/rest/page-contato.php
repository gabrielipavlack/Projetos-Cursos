<?php 
// Template Name: Contato
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="container contato">
	<h2 class="subtitulo"><?php the_title(); ?></h2>

	<div class="grid-16">
		<a href="<?php the_field('link_mapa'); ?>" target="_blank"><img src="<?php the_field('imagem_mapa'); ?>" alt="Imagem mapa Rest"></a>
	</div>

	<?php if(have_rows('categorias_contato')) : while(have_rows('categorias_contato')) : the_row(); ?>
	<div class="grid-1-3 contato-item">
		<h2><?php the_sub_field('nome_categoria_contato'); ?></h2>
		<?php if(have_rows('info_categoria_contato')) : while(have_rows('info_categoria_contato')) : the_row(); ?>
		<p><?php the_sub_field('texto_info'); ?></p>
		<?php endwhile; else: endif; ?>
	</div>

	<?php endwhile; else: endif; ?>
	<!--

				<p>21 2422-9999</p>
		<p>contato@rest.com</p>
		<p>facebook.com/rest/</p>
	<div class="grid-1-3 contato-item">
		<h2>Horários</h2>
		<p>Segunda à Sexta: 10 às 23</p>
		<p>Sábado: 14 às 23</p>
		<p>Domingo: 14 às 22</p>
	</div>
	<div class="grid-1-3 contato-item">
		<h2>Endereço</h2>
		<p>Rua Marechal, 29</p>
		<p>Copacabana - Rio de Janeiro</p>
		<p>Brasil - Terra - Via Láctea</p>
	</div>
</section>

-->
</section>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>