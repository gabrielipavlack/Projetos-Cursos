<ul class="portfolio_lista rslides_portfolio">

<?php $portfolio = get_page_by_title('portfolio'); 

 if(have_rows('fotos_portfolio', $portfolio)) : while(have_rows('fotos_portfolio', $portfolio)) : the_row(); ?>

<li>
  <div class="grid-8"><img src="<?php the_sub_field('foto_1'); ?>" alt="<?php the_sub_field('descricao_foto1'); ?>"></div>
  <div class="grid-8"><img src="<?php the_sub_field('foto_2'); ?>" alt="<?php the_sub_field('descricao_foto2'); ?>"></div>
  <div class="grid-16"><img src="<?php the_sub_field('foto_3'); ?>" alt="<?php the_sub_field('descricao_foto3'); ?>"></div>
</li>
<?php endwhile; else: endif; ?>
</ul>

<?php if (!is_page('portfolio')) {  ?>
<div class="call">
      <p>conheça mais o nosso portfólio</p>
      <a href="/bikcraft/portfolio/" class="btn">Portfólio</a>
  </div>
  <?php } ?>