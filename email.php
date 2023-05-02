<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$barb = $_POST['barb'];
$horario = $_POST['horario'];


$assunto = "Teste contato barbearia ".time();
$destino = "pabloftavares460@gamil.com";

$corpo = "Nome: $nome<br>
Email: $email<br>
Telefone: $telefone<br>
Barbeiro: $barb<br>
Mensagem: $mensagem<br>
Horario: $horario";

$payload = [
    "subject" => $assunto,
    "body" => $corpo,
    "from" => "teste@planservrh.com.br",
    "to" => $destino,
    "headers" => [
        "Content-Type" => "text/html"
    ]
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.smtplw.com.br/v1/messages");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json','x-auth-token: 5e85a1e62596ede60fb01f6fcb5c3909'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$payload = json_encode( $payload );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
$server_output = curl_exec($ch);
curl_close($ch);

header("Location: index.php")
?>