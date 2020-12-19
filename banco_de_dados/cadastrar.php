<?php 
	
	//Importando conexão
	include_once "conexao.php";

	//valores para cadastro
	$codigo = 0;
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$cpf = "";
	$cnpj = "";
    if(isset($_POST['campo_cpf'])){
        $cpf = $_POST['campo_cpf'];
    } else {
        $cnpj = $_POST['campo_cnpj'];
    }
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['UF'];

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
		echo "<script>
			alert('Cadastro realizado com sucesso');
		</script>";
	} else {
		echo "<script>
			alert('Erro ao efetuar cadastro, tente novamente');
		</script>";
	}

?>
<meta http-equiv="refresh" content="0;url=../index.html">