<?php
    include_once "./banco_de_dados/conexao.php";

	$sql = "SELECT * FROM cliente";
	$comando  = $con->prepare($sql);
	$comando->execute();
    $todos =  $comando->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste prático</title>
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/main.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/53dc88a45f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
         <nav class="menu">
            <div class="logo">
                <p>Teste<br>Prático</p>
            </div>
            <div class="itens">
                <ul>
                    <li><a href="./index.html">Cadastro</a></li>
                    <li><a href="./listar.php" class="ativo">Listagem</a></li>
                </ul>
            </div>
        </nav>
        <div class="corpo-listagem">
             <h2 class="titulo listagem">Clientes cadastrados</h2>
             <br>
             <div class="tabela-corpo">
                 <table>
                     <thead>
                         <tr>
                             <th>#</th>
                             <th>Nome</th>
                             <th>Email</th>
                             <th>Telefone</th>
                             <th>CPF ou CNPJ</th>
                             <th>CEP</th>
                             <th>Logradouro</th>
                             <th>Número</th>
                             <th>Bairro</th>
                             <th>Cidade</th>
                             <th>UF</th>
                             <th>Ação</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            foreach ($todos as $registro) {
                                if ($registro['cod_cliente'] % 2 == 0) {
                                    ?>
                                        <tr class="par-listra">
                                            <td><?php echo $registro['cod_cliente']; ?></td>
                                            <td><?php echo $registro['nome']; ?></td>
                                            <td><?php echo $registro['email']; ?></td>
                                            <td><?php echo $registro['telefone']; ?></td>
                                            <td><?php 
                                                if($registro['cpf'] == ""){
                                                    echo $registro['cnpj'];
                                                } else {
                                                    echo $registro['cpf'];
                                                }
                                            ?></td>
                                            <td><?php echo $registro['cep']; ?></td>
                                            <td><?php echo $registro['logradouro']; ?></td>
                                            <td><?php echo $registro['numero']; ?></td>
                                            <td><?php echo $registro['bairro']; ?></td>
                                            <td><?php echo $registro['cidade']; ?></td>
                                            <td><?php echo $registro['estado']; ?></td>
                                            <td>
                                                <p class="popover">Excluir</p>
                                                <a href="./banco_de_dados/excluir.php?cod=<?php echo $registro['cod_cliente']?>"class="icone"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                } else {
                                    ?>
                                        <tr class="impar-listra">
                                            <td><?php echo $registro['cod_cliente']; ?></td>
                                            <td><?php echo $registro['nome']; ?></td>
                                            <td><?php echo $registro['email']; ?></td>
                                            <td><?php echo $registro['telefone']; ?></td>
                                            <td><?php 
                                                if($registro['cpf'] == ""){
                                                    echo $registro['cnpj'];
                                                } else {
                                                    echo $registro['cpf'];
                                                }
                                            ?></td>
                                            <td><?php echo $registro['cep']; ?></td>
                                            <td><?php echo $registro['logradouro']; ?></td>
                                            <td><?php echo $registro['numero']; ?></td>
                                            <td><?php echo $registro['bairro']; ?></td>
                                            <td><?php echo $registro['cidade']; ?></td>
                                            <td><?php echo $registro['estado']; ?></td>
                                            <td>
                                                <p class="popover">Excluir</p>
                                                <a href="./banco_de_dados/excluir.php?cod=<?php echo $registro['cod_cliente']?>"class="icone"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                                ?>
                                    
                                <?php
                            }
                         ?>
                     </tbody>
                 </table>
             </div>
        </div>
    </div>
</body>
</html>