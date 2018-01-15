<?php  $con = new PDO("mysql:host=localhost;dbname=projetos","root","");

$output= '';
$search = $_POST['search'];
$sql = "SELECT * FROM cliente WHERE nome LIKE '%".$search."%'";
$result= $con->prepare($sql);
$result->execute();
$count = $result->rowCount();

if($count > 0){
	
}

?>