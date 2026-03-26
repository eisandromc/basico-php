<?php
// comentario curto - linha

# outro formato de comentario - linha

/**
 * Comentario longo/bloco
 * 
 */

echo 'Olá Mundo!<br>';
print("<h1>Olá Mundo!</h1>");

// declaracao de variaveis
$nome = "Sandro";
$sobrenome = 'Martins da Costa'; 
$nomeCompleto = $nome.$sobrenome; // concatena - unifica
$idade = 42;

// impressao de dados com variaveis 
echo 'Meu nome é $nomeCompleto.';
echo "Meu nome é {$nomeCompleto}.";

// declaracao de constante
define('PI',3.14159);
echo "O valor de PI é " . PI . ".";

// constantes de conexao com banco de dados
define('DBHOST', 'localhost');
define('DBNAME', 'empresa');
define('DBUSER', 'root');
define('DBPASS', '');

// colecao de dados - array
$colecaoAlunos = array("Alice", "Bob", "Charlie");
// imprime objeto e array(vetor,matriz, multidimensional)
var_dump($colecaoAlunos);// imprime array completo
print_r($colecaoAlunos);

echo '<pre>';
var_dump($colecaoAlunos);
echo '</pre>';
?>

<ul>
  <?php
  // laco de repeticao 
  for ($i=0; $i < 3 ; $i++) {
  ?>
    <li><?php echo $colecaoAlunos[$i];?></li>
  <?php
  }
  ?>
</ul>
