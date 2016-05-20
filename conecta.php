<?php
/**
* Sistema de segurança com acesso restrito
*
* Usado para restringir o acesso de certas páginas do seu site
*
* @author Thiago Belem <contato@thiagobelem.net>
* @link http://thiagobelem.net/
*
* @version 1.0
* @package SistemaSeguranca
*/
//  Configurações do Script
// ==============================

include("config.php");


$_SG['conectaServidor'] = true;    // Abre uma conexão com o servidor MySQL?
$_SG['abreSessao'] = true;         // Inicia a sessão com um session_start()?
$_SG['caseSensitive'] = false;     // Usar case-sensitive? Onde 'thiago' é diferente de 'THIAGO'
$_SG['validaSempre'] = true;       // Deseja validar o usuário e a senha a cada carregamento de página?
// Evita que, ao mudar os dados do usuário no banco de dado o mesmo contiue logado.
$_SG['servidor'] = 'localhost';    // Servidor MySQL
$_SG['usuario'] = 'root';          // Usuário MySQL
$_SG['senha'] = '';                // Senha MySQL
$_SG['banco'] = 'ldj';            // Banco de dados MySQL
$_SG['paginaLogin'] = 'login.php'; // Página de login
$_SG['tabela'] = 'usuarios';       // Nome da tabela onde os usuários são salvos
// ==============================
// ======================================
//   ~ Não edite a partir deste ponto ~
// ======================================

function produtos(){

// Create connection
$conn = new mysqli('localhost', 'root', '','ldj');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$a = $conn->query("INSERT INTO usuarios (login,senha) VALUES ('Miriam', '08071997')");

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
$var = "";
if ($result->num_rows > 0) {
    // output data of each row
    while(
    return $row; = $result->fetch_assoc()) {
        $var += "id: " . $row['codprod']." - Tipo: " . $row['tipo']. " - Nome" . $row['nome'].
        " - Preço " . $row['preco']. 
        " - Tipo de negócio" . $row['tiponegocio'].
        " - img :" . $row['Imagem']."<br>";
    }
    return $var;
} else {
    echo "0 results";
}
//$a = $_SG['link']->query("INSERT INTO usuarios (login,senha) VALUES ('Miriam', '08071997')");
}


/**
* Função que valida um usuário e senha
*
* @param string $usuario - O usuário a ser validado
* @param string $senha - A senha a ser validada
*
* @return bool - Se o usuário foi validado ou não (true/false)
*/
