<?php 
// Template Name: Home
get_header();
?>
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

<?php 
// get_field é uma função do ACF
//funciona igual ao the_field, só que não mostra esse campo que o usuário vai preencher no Wordpress já nesse
// local da página (local onde está o código), diferente do the_field, que preenche e mostra o que o usuário preencheu já naquele local do código.
$imagem_id = get_field('background_home');  // "formato dos dados" no painél do Wordpress será a ID.
// pegar o caminho da imagem:
// parâmetros: id da img, tamanho
$background_large = wp_get_attachment_image_src($imagem_id, 'large');
$background_medium = wp_get_attachment_image_src($imagem_id, 'medium');
// isso vai gerar um array, que contém: [0] url; [1] width; [2] height; [3] boolean. Queremos a URL.

// echo = mostrar a variável.
?>

<style type="text/css">
.introducao{
  background: url('<?php echo $background_large[0]; ?>') no-repeat center;
  background-size: cover;
}
@media only screen and (max-width: 767px){
.introducao{
background: url('<?php echo $background_medium[0]; ?>') no-repeat center;
background-size: cover;
}
}
</style>

<section class="introducao">
  <div class="container">
    <h1><?php the_field('titulo_home_introducao'); ?></h1>
    <blockquote class="quote-externo">
      <p>“<?php the_field('citacao_introducao_home'); ?>”</p>
      <cite><?php the_field('autor_citacao_home_introducao'); ?></cite>
    </blockquote>
    <a href="/bikcraft/produtos/" class="btn">Orçamento</a>
  </div>
</section>

<section class="produtos container animar">
  <h2 class="subtitulo">Produtos</h2>
  <ul class="produtos_lista">

    <li class="grid-1-3">
      <div class="produtos_icone">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/passeio.png" alt="Bikcraft Passeio">
      </div>
      <h3>Passeio</h3>
      <p>Muito melhor do que passear pela orla a vidros fechados.</p>
    </li>

    <li class="grid-1-3">
      <div class="produtos_icone">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/esporte.png" alt="Bikcraft Esporte">
      </div>
      <h3>Esporte</h3>
      <p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
    </li>

    <li class="grid-1-3">
      <div class="produtos_icone">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/produtos/retro.png" alt="Bikcraft Retrô">
      </div>
      <h3>Retrô</h3>
      <p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
    </li>
  </ul>

  <div class="call">
    <p>clique aqui e veja os detalhes dos produtos</p>
    <a href="/bikcraft/produtos/" class="btn btn-preto">Produtos</a>
  </div>

</section>
<!-- Fecha Produtos -->

<section class="portfolio">
  <div class="container">
    <h2 class="subtitulo">Portfólio</h2>
  
    <?php include(TEMPLATEPATH . "/inc/slide-portfolio.php"); ?>

</section>

<?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>

<?php endwhile; else: endif ; ?>

<?php get_footer(); ?>

