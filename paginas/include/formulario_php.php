<link rel="stylesheet" type="text/css" href="formulario">
<?php
$contact_client = $_POST['contact_client'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$communication = $_POST['communication'];

$to = 'contato@fenixecho.com.br';
$subject = 'Orçamento';
$msg = " Cliente: " .$name;
    "Email: " .$email;
    "Contato:"  .$phone;
    "Mensagem: " .$communication;
    "Selecione tipo de atendimento:" .$contact_client;

    $to = mail($subject, $msg, 'From:' . $email);
    if($to){
    echo '<div class="container">
                <div class="rounded m-auto">
                    <h2>Agradecemos pelo seu contato!</h2>
                    <h4>Em breve retornaremos a sua solicitação</h4>
                    <button class="btn btn-outline-light"><a href="#home">Voltar</a></button>
                </div>
            </div>';
            } else { echo '<div class="container">
                <div class="rounded m-auto">
                    <h2>Erro ao enviar o contato</h2>
                    <button class="btn btn-outline-light"><a href="#home">Voltar</a></button>
                </div>
            </div>'}

?>