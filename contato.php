<?php

require './menu.php';

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
  <title>Projetos</title>
</head>

<body> 
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


