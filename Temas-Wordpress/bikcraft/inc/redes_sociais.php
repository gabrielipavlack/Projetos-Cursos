<!-- pega os campos personalizados da página Sobre do wordpress -->
<?php $contato = get_page_by_title('contato'); ?>
<ul>
   <?php if(have_rows('redes_sociais', $contato)) : while(have_rows('redes_sociais', $contato)) : the_row(); ?>
					<li><a href="<?php the_sub_field('link_rede_social'); ?>" target="_blank"><img src="<?php the_sub_field('icone_rede_social'); ?>" alt="<?php the_sub_field('descricao_rede_social'); ?>"></a></li>
    <?php endwhile; else: endif; ?>
</ul>