<?php
ini_set( 'display_errors', true );
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$nome     = $_POST['nome'];
$email    = $_POST['email'];
$assunto  =  $_POST['assunto'];
$mensagem = $_POST['mensagem'];


$arquivo = "<b> Mensagem enviada do site omegainc.esy.es</b> <br>
  <hr>
  Nome: $nome <br>
  Email: $email <br>
  Assunto: $assunto <br>
  <hr>
  Mensagem: <br>
  $mensagem <br>
";

$emailenviar = "tico254@gmail.com";
$destino = $emailenviar;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Omega Inc. <omegainc@omegainc.com>';
//$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($destino, $assunto, $arquivo, $headers);
if($enviaremail){
  $return = 1;
} else {
  $return = 0;
}

  echo $return;
 ?>
