<?php

require './menu.php';

$apresentacao = "Meu nome é Lucas Ábner e criei este site com o objetivo de compartilhar um pouco da minha evolução profissional através de projetos desenvolvidos ao longo de meus estudos.<br>
Lhe convido à conhecer um pouco de minha história e alguns dos projetos que desolvi. Sinta-se à vontade para conferir."

?>



<!DOCTYPE html>
<html lang="pt-br">
  <title>Meu site</title>
</head>

<body>
  
  <main class="apresentacao">
      <div class="ban banner">
        <div class="arredonda-image">
        <a href="./sobre-mim.php"><img class="image" src="./imagens/_ELE0314.jpg"></a>
        </div>
      </div>
      <div class="ban conteudo">
        <h2 class="titulo-paragrafo">Bem-Vindo(a)!</h2>
        <p class="texto-paragrafo"> <?php echo $apresentacao; ?>
        </p>
      </div>
  </main>
  <footer>
    <div class="content">
      <div class="caixa list-footer">
        <p>E-mail: <a href="abner.lborges@hotmail.com">  abner.lborges@hotmail.com</a></p>
      </div>
      
      <div class="caixa  container-logo">
        <img class="logo-footer" src="./imagens/logo1.png">
      </div>
      
      <div class="caixa icons-footer">
        <a href="https://www.linkedin.com/in/lucasabnertb" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://github.com/lucasabnertb" target="_blank"><i class="fab fa-github"></i></a>
      </div>
    </div>
    
  </footer>

</body>
</html>



