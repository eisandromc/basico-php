<?php
function EscreverNaTela( $mensagem ){
  // bloco de codigo 
  echo $mensagem;
}

function SomaValores($x, $y){
  // retorna o calculo <- retornar para quem chamou
  return $x + $y;
}

function HeaderSite($titulo, $menu){
  $header = '<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>'.$titulo.'</title>
              <link rel="stylesheet" href="style.css">
            </head>
            <header>
              <nav>
                <ul>';
                // percorre o array e monta o menu
                foreach ($menu as $key => $value) {
                  $header .= '<li><a href="'.$key.'.php">'.$value.'</a></li>';
                }
                $header .= '</ul>
              </nav>
            </header>
            <body>';
    // imprime o header
    echo $header;
}

function FooterSite(){
  echo '<footer><p>Desenvolvido por Sandro</p></footer></body></html>';
}
?>
