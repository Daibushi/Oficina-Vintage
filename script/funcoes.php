<?php

include("script/config.php");

$conn = false;

function open_database() {
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
    } catch (Exception $e) {
        die($e->getMessage());
        return null;
    }
}
function close_database($conn) {
    try {
        mysqli_close($conn);
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

function($post){
      // Create connection
if($conn == false){
    $conn = open_database();
}
  
$a = $conn->query("INSERT INTO `customers`(`nome`, `email`, `datanasc`, `endereco`, `idade`, `cep`, `cidade`, `estado`, `telefone`, `celular`, `cpf_cnpj`, `created`, `modified`) 
                    VALUES ($post[0],$post[1],$post[2],$post[3],$post[4],$post[5],$post[6],$post[7],$post[8],$post[9],$post[10],$post[11],$post[12],$post[13])";
                    header("location: index.php");

$conn.close_database();
}

function produto($id){
    // Create connection
if($conn == false){
    $conn = open_database();
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$a = $conn->query("INSERT INTO usuarios (login,senha) VALUES ('Miriam', '08071997')");

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["codprod"] == $id){
            echo '<img class="listprod" src='. $row['Imagem'].'>'.
            '</div>'.
            '<div class="col-md-4"  style="width: 300px" class="listprod">'.  
               '<br> Tipo: ' . $row['tipo']. '<br> Nome: ' . $row['nome'].
                 '<br> Preço ' . $row['preco']. 
                '<br> Tipo de negócio: ';
                if ($row['tiponegocio'] == 1){
                    echo ' venda';
                }else if($row['tiponegocio'] == 0){
                    echo ' troca';
                }
                echo'</p><br>'
        ;}
        

    }
} else {
    echo "0 results";
}
$conn = close_database();
}

function compra($id){
    // Create connection
$conn = new mysqli('localhost', 'root', '','ldj');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$a = $conn->query("INSERT INTO usuarios (login,senha) VALUES ('Miriam', '08071997')");

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["codprod"] == $id){
            echo 
        '<div class="row">
        <div class="col-md-1"  style="margin: -60px"></div>'
        .
            '<div class="col-md-4" style=" margin-left: 80px" id="coluna4" id="listaColuna">'.
             ''.'<img class="listprod" src='. $row['Imagem'].'>'.
            '</div>'.
            '<div class="col-md-4"  style="width: 300px" class="listprod">'.  
               '<br> Tipo: ' . $row['tipo']. '<br> Nome: ' . $row['nome'].
                 '<br> Preço ' . $row['preco']. 
                '<br> Tipo de negócio: ';
                if ($row['tiponegocio'] == 1){
                    echo ' venda';
                }else if($row['tiponegocio'] == 0){
                    echo ' troca';
                }
                echo'</p><br>'       
        ;}
        

    }
} else {
    echo "0 results";
}
}

function getProds(){
	// Create connection
$conn = new mysqli('localhost', 'root', '','ldj');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$a = $conn->query("INSERT INTO usuarios (login,senha) VALUES ('Miriam', '08071997')");

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
        '<div class="row">
        <div class="col-md-1"  style="width: 20px"></div>'
        .
        	'<div class="col-md-4" id="listaColuna">'.
        	 '<a href="'.$row['link'].'" id="linkItem">'.'<img class="listprod" src='. $row['Imagem'].'>'.
        	'</div>'.
        	'<div class="col-md-6" class="listprod">'.	
       		   '<br> Tipo: ' . $row['tipo']. '<br> Nome: ' . $row['nome'].
       			 '<br> Preço ' . $row['preco']. 
        		'<br> Tipo de negócio: ';
        		if ($row['tiponegocio'] == 1){
        			echo ' venda';
        		}else if($row['tiponegocio'] == 0){
        			echo ' troca';
        		}
       			echo'</p></a><br>'.
       		 '</div>'.
        '</div>'.
        '<hr>'
        ;

    }
} else {
    echo "0 results";
}
}

function redirect($link){
    session_write_close();
    header('location: ' . $link);
}