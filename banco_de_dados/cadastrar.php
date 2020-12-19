<?php 
	
	//Importando conexão
	include_once "conexao.php";

	//valores para cadastro
	$codigo = 0;
	$nome = $_POST['nome'];
	$email = $_POST['email'];
    $telefone = $_POST['telefone'];
    if(isset($_POST['campo_cpf'])){
        $cpf = $_POST['campo_cpf'];
        $cnpj = "";
    } else {
        $cnpj = $_POST['campo_cnpj'];
        $cpf = "";
    }
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

	//Criando SQL
	$sql = "INSERT INTO cliente VALUES(:codigo,:nome,:email,:telefone,:cpf,:cnpj,:cep,:logradouro,:numero,:bairro,:cidade,:estado)";

	//iniciando Instrução;

	$comando = $con->prepare($sql);

	$comando->bindParam(":codigo",$codigo);
	$comando->bindParam(":nome",$nome);
	$comando->bindParam(":email",$email);
	$comando->bindParam(":telefone",$telefone);
	$comando->bindParam(":cpf",$cpf);
	$comando->bindParam(":cnpj",$cnpj);
	$comando->bindParam(":cep",$cep);
	$comando->bindParam(":logradouro",$logradouro);
	$comando->bindParam(":numero",$numero);
	$comando->bindParam(":bairro",$bairro);
	$comando->bindParam(":cidade",$cidade);
	$comando->bindParam(":estado",$estado);

	//Executando instrução
	if ($comando->execute()) {
		echo "Cadastro efetuado com sucesso";
	} else {
		echo "erro ao efetuar o cadastro";
	}

?>