<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cliente</title>
  </head>
  <body>
    <?php
      require 'Cliente.php';
      $servidor = "localhost";
      $usuario = "root";
      $senha = "senha";
      $banco = "verao";
      $conexao = new mysqli($servidor, $usuario, $senha, $banco) // mysqli = esse i é de drive q vai tratar as escessoes
        or die("Erro de conexao: $conexao->connect_error");
      $cliente = new Cliente();
      $cliente->nome = $_POST['nome'];
      $cliente->email = $_POST['email'];

      $sql = "INSERT INTO Clientes (nome, email) values  (?,?)";  // so inves de concatenar($cliente->nome), passo por paramentro(?)

      $comando=$conexao->prepare($sql);
      $comando->bind_param("ss", $cliente->nome , $cliente->email ); // ss=string  -  bind_param substitui os ? pelos parametros

      $saida=$comando->execute();
    ?>

    <h1>Cliente</h1>

    <?php if($saida === true) { ?>
      <h3>Cliente salvo com sucesso!! </h3>
    <?php } else {
      //var_dump($conexao);
      ?>
    <h3>Erro: <?= $conexao->error  ?> </h3>
    <h3>SQL:<?= sql  ?> </h3>
    <?php }
    $comando->close();
      $conexao->close();
     ?>
  </body>
</html>
