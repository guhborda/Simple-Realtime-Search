<?php 

$con = new PDO("mysql:host=localhost;dbname=projetos","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


$output= '';
$erro = '';
$search = $_POST['search'];
$sql = "SELECT * FROM cliente WHERE nome LIKE '%".$search."%'";
$result= $con->prepare($sql);
$result->execute();
$count = $result->rowCount();

if($count>0){

	$output .= '<div class="table">
	<table>
	<thead>
	<th>ID</th>
	<th>Nome</th>
	<th>Username</th>
	<th>Idade</th>
	<th>Endereco</th>
	<th>Cidade</th>
	<th>Cep</th>
	<th>Telefone</th>

	</thead>';

	while($fetch = $result->fetch(PDO::FETCH_ASSOC)){
		# code...
	
		$output .= 
			'<tbody>
			<td>'.$fetch['id'].'</td>
			<td>'.$fetch['nome'].'</td>
			<td>'.$fetch['username'].'</td>
			<td>'.$fetch['idade'].'</td>
			<td>'.$fetch['endereco'].'</td>
			<td>'.$fetch['cidade'].'</td>
			<td>'.$fetch['cep'].'</td>
			<td>'.$fetch['telefone'].'</td>
			</tbody>';
			
	}
	$output .= '
		</table>
	</div>';
	echo $output;
	
}else{
	$erro .='<h4 align="center"> Search Result</h4>';
	$erro .= '<div class="table">
	<span>Nenhum resultado encontrado :/ </span>';
	$erro .= '</div>';
	echo $erro;
}

 ?>