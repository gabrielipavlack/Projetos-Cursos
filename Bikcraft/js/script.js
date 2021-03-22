if(window.SimpleSlide){
new SimpleSlide({
  slide: 'quote', // nome do atributo data-slide="principal"
  //nav: true,  //se deve ou não mostrar a navegação
  auto: true, // se o slide deve passar automaticamente
  time: 4000, // tempo de transição dos slides
  pauseOnHover: true, // pausa a transição automática
});


new SimpleSlide({
  slide: 'portfolio', // nome do atributo data-slide="principal"
  nav: true,  //se deve ou não mostrar a navegação
  auto: true, // se o slide deve passar automaticamente
  time: 4500, // tempo de transição dos slides
  //pauseOnHover: true, // pausa a transição automática
});

}

if(window.SimpleAnime){
  new SimpleAnime();
}

if(window.SimpleForm){
new SimpleForm({
  form: ".formphp", //seletor do formulário
  button: "#enviar", //seletor do botão
  erro: "<div id='form-erro'><h2><p>Um erro ocorreu, tente enviar diretamente para o email contato@bikcraft.com</p></h2>", //msg de erro
  sucesso: "<div id='form-sucesso'><h2>Formulário enviado com sucesso!</h2><p>Em breve entraremos em contato!</p></div>"
});
}