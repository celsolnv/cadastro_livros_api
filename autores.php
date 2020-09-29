<?php
header('Access-Control-Allow-Origin: *');
include "criarConexao.php";

function getAutores(){
    $conn = criarConexao();

    $sql = "select * from autores";

    $array_json = array();
 
    $result = $conn->query($sql);
    
    if (mysqli_num_rows($result)==0){
        return $array_json;
    }
    else{
        while($row = $result->fetch_assoc()) {
            $json =  new STDClass();
            $json -> id = $row['id'];
            $json -> nome = $row['nome'];
            $json -> email = $row['email'];
            // $json -> email = $row['senha'];

            array_push($array_json,$json);
        }
        return $array_json;
    }

}

function cadastraAutores($dados_json){
    $conn = criarConexao();
    // echo  $dados_json -> nome ;echo $dados_json -> email ; echo $dados_json -> senha;
    // $msg = "Usuário cadastrado com sucesso!";
    $sql = "insert into autores(nome,email,senha) values(";
    $sql = $sql . "'" . $dados_json -> nome . "','" . $dados_json -> email . "','" . $dados_json -> senha . "')";
    // echo $sql . "<br>";
    if ($conn->query($sql)==True){
        $conn->close();
        // return $msg;
        return json_encode(getAutores());
    }
    else{
        $conn->close();
        return $conn -> error;
    }

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    $dados_json =  json_decode(file_get_contents("php://input")); 
    echo cadastraAutores($dados_json);

}

else{
    echo json_encode(getAutores());
}


?>
