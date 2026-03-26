<?php
// dados de menu
$colecaoMenu = array('teste2'=>'Home', 
                     'produtos'=>'Produtos', 
                     'sobre'=>'Sobre',
                     'servicos'=>'Serviços',
                     'parceiros'=>'Parceiros',
                     'bancos'=>'Bancos',
                     'blog'=>'Blog',
                     'contato'=>'Contato');

$colecaoProdutos = array(array('nome'=>'Ovo Lacta Sonho Valsa', 'preco'=>'53,99', 'descricao'=>'','foto'=>'sonho.png','categoria'=>'Chocolate'),
                         array('nome'=>'Ovo Lacta Ouro Branco', 'preco'=>'75,99', 'descricao'=>''),
                         array('nome'=>'Ovo Nestle Alpino', 'preco'=>'73,99', 'descricao'=>''),
                         array('nome'=>'Ovo Nutella', 'preco'=>'189,99', 'descricao'=>'') 
                        );

$colecaoCategorias = array(
                        array('Chocolate','Bombom','Balas'),
                        array('Celular','Tablet','Impressora')
);
$colecaoCategorias[1][0];
echo $colecaoProdutos[3]['preco'];

foreach ($colecaoProdutos as $key => $value) {
  echo $value['nome'].'-'.$value['preco'].'<br>';
}


?>
