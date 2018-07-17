<?php
include_once ('../../conectadb.php');

$busca = $_POST['pesquisa'];

$query = "select * from usuarios where usernome like '%$busca%'";
$num = mysqli_num_rows($query);
if($num >0){
    while ($result = mysqli_fetch_assoc($query)){
        echo $result['usernome'];
    }
}else{
    echo "Nada Encontrado";
}
?>