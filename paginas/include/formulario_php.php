<?php
$contact_client = $_POST['contact_client'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$communication = $_POST['communication'];

$to = 'contato@fenixecho.com.br';
$subject = 'Budget Contact';
$msg = " Cliente: $name/n" .
    "Email: $email/n" .
    "Contato: $phone/n" .
    "Mensagem: $communication/n" .
    "Selecione tipo de atendimento: $contact_client";
mail($to, $subject, $msg, 'From:' . $email);


echo '<div class="container">
        <div class="agendevisita rounded m-auto">
            <h2>Agradecemos pelo seu contato!</h2>
            <h4>Em breve retornaremos a sua solicitação</h4>
            <button class="btn btn-outline-light"><a href="#home">Voltar</a></button>
        </div>
    </div>';
?>