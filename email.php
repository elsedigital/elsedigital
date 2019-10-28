<?php


if(isset($_POST['email'] && !empty($_POST[exif_thumbnail])))


$nome addcslashes ($_POST['nome'])
$email addcslashes ($_POST['email'])
$telefone addcslashes ($_POST['telefone'])
$funcao addcslashes ($_POST['inquilino'])

$to = "helioliveirasilval@gmail.com";
$subject =  "Lead - Landing Page else";
$body = "Nome:  ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "Função: ".$funcao;

$header = "From: helio1a2013@gmail.com". "\r\n".
."Reply-to:"$email. "\r\n".
."X=mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)) {

echo ("email enviado com sucesso")

}else {

    ("email não pode ser enviado")
}

?>