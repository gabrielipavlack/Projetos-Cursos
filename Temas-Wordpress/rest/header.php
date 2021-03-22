<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name');?> <?php wp_title(''); ?>  <?php the_field('title_SEO'); ?></title>

  <meta name="description" content="<?php bloginfo('name'); ?> | <?php wp_title(''); ?> <?php the_field('description_SEO'); ?>">

		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

<?php wp_head(); ?>

	</head>

	<body>
		
		<header>
			<nav>
	
<?php 
$args = array(
	'menu' => 'principal',
	'container' => false
);
wp_nav_menu( $args );

?>
<!-- 		
		<ul>
					<li class="current_page_item"><a href="/rest">Menu</a></li>
					 essas páginas tem o href com o nome definido no painel de páginas do wordpress 
					<li><a href="/rest/sobre">Sobre</a></li>
					<li><a href="/rest/contato">Contato</a></li>
				</ul>	
-->
			</nav>

			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>




<?php // $contato = get_page_by_title('Contato'); 

// devemos colocar o id da página do Wordpress onde está vindo essa informação. Nesse caso, o usuário
// altera essas informações na página Contato do Wordpress, a qual tem id igual a 22. 
    $id_page_contato = 22;
?>
			<p><?php the_field('endereco_header', $id_page_contato); ?></p>
			<p class="telefone"><?php the_field('telefone_header', $id_page_contato); ?></p>
		</header>
    