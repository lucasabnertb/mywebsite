<?php

//Funcao que verifica e executa o metodo POST
if (isset($_POST['email']) && !empty($_POST['email'])) {


// Variáveis do método POST
//=========================================================
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['mensagem']);
//=========================================================

// E-mail que receberá 
//=========================================================
$to = "lucasabner@lucasabner.uni5.net"; //Tem que ser um e-mail que pertence ao domínio
//=========================================================

//Componentes do corpo da mensagem
//=========================================================
$email_destinatario = "lucasabner@lucasabner.uni5.net";
$subject = "Contato via formulario"; //Assunto do e-mail
$body = "Nome: ".$nome.PHP_EOL.
        "E-mail: ".$email.PHP_EOL.
        "Telefone: ".$telefone.PHP_EOL.
        "Mensagem: ".$mensagem.PHP_EOL;
//=========================================================

// Variáveis do método POST
//=========================================================
$header = "From: $email_destinatario".PHP_EOL.
          "Reply-To: ".$email.PHP_EOL.
          "X=Mailer:PHP/".phpversion();
//=========================================================
$retorno1 = "Mensagem enviada com sucesso!";
$retorno2 = "Erro ao enviar";

// Variáveis do método POST
//=========================================================          
if (mail($email_destinatario,$subject,$body,$header)){
  echo "<script> alert('$retorno1');</script>";
}else{
  echo "<script> alert('$retorno2');</script>";
}

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="./styles/reset.css">
  <link rel="stylesheet" href="./styles/main.css">
  <link rel="stylesheet" href="./styles/form.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/3ce734722c.js" crossorigin="anonymous"></script>

  <title>Projetos</title>
</head>


<body>
  <header class="topo">
    
    <a href="./index.php"><h1><img class="logo" src="./imagens/logo1.png"></h1></a>
   
    <nav class="menu-nav">
      <a class="menu" href="./index.php">Inicio</a>
      <a class="menu" href="./projetos.php">Projetos</a>
      <a class="menu" href="./sobre-mim.php">Sobre Mim</a>
      <a class="menu" href="./contato.php">Contato</a>    
      <a href="https://www.linkedin.com/in/lucasabnertb" target="_blank"><i class="fab fa-linkedin"></i></a>
      <a href="https://github.com/lucasabnertb" target="_blank"><i class="fab fa-github"></i></a>
    </nav>
  </header>
  <main>
    <div class="container">
      
      <form class="form" method="POST" action="<echo">

        <label for="nome">Nome:</label>
        <input type="text" name='nome' class="input" required placeholder="Seu nome" tabindex="0"/>

        <label for="email">E-mail: </label>
        <input type="email" name='email' class="input" required placeholder="email@dominio.com"/>

        <label for="telefone">Telefone: </label>
        <input type="tel" name='telefone' class="input" required placeholder="(xx) xxxx-xxxx"/>

        <label for="mensagem">Mensagem: </label>
        <textarea cols="30" rows="8" name='mensagem' class="input mensagem" required></textarea>

        <input type="submit" value="Enviar" class="button" />

      </form>
    </div> 
  </main>
</body>


