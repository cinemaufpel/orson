<?

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$contato = $_POST['contato'];


$mensagem = "
Nome: $nome
Email: $email
Telefone: $telefone

Mensagem: $contato

";

mail("revistaorson@gmail.com","## contato website revista ORSON",$mensagem,"From:$email");
echo "<script>window.location.href='sucesso.html'</script>";

?>


