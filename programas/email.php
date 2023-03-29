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

// Variáveis do método POST
//=========================================================          
if (mail($email_destinatario,$subject,$body,$header)){
  echo("Mensagem enviada com sucesso!");
}else{
  echo ("Erro ao enviar");
}

}

?>