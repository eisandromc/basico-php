<?php
  // include de arquivos
  include_once 'dados.php';
  include_once 'functions.php';
  // chama o componente 
  HeaderSite("Japoneses - O maior website de vendas na internet",$colecaoMenu);
  // functions - execucao e retorno
  EscreverNaTela('<h1>Conheça o nosso website</h1>');
  $total = SomaValores(12,13);
  EscreverNaTela($total);

  FooterSite();
?>

