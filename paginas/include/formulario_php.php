
 <!-- Fomulário de Envio Contato -->
 <form method="post" action="formulario_php.php" class="">
            <div class="form-group">
                <label for="contact_client"></label>
                <select class="form-control" id="contact_client" name="contact_client">
                    <option>Todos os serviços</option>
                    <option>Desenvolvimento de Site</option>
                    <option>E-mail Profissional</option>
                    <option>Cartão de Visita Virtual</option>
                    <option>Cardápio Virtual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fullname"></label>
                <input type="text" class="form-control" id="fullname" placeholder="Nome Completo" name="fullname">
            </div>
            <div class="row">
                <div class="form-group col">
                    <label for="email"></label>
                    <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
                </div>
                <div class="form-group col">
                    <label for="phone"></label>
                    <input type="text" class="form-control" id="phone" placeholder="(xx) x.xxxx-xxxx" name="phone">
                </div>
            </div>
            <div class="form-group">
                <label for="communication"></label>
                <textarea class="form-control" id="communication" rows="3" placeholder="Conte-nos um pouco sobre sua empresa e como podemos lhe ajudar!" name="communication"></textarea>
            </div>
            <div class="text-right mt-3">
                <button class="btn btn-light"> <input type="submit" value="Enviar" name="submit"/>  </button>
            </div>

        </form>
        <!-- Fim Fomulário de Envio Contato -->


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