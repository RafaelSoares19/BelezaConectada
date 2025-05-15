<?php
// Define o nome do servidor onde o banco de dados está hospedado (neste caso, o próprio computador)
$servername = "localhost";

// Nome de usuário para se conectar ao banco de dados (padrão para ambientes locais é "root")
$username = "root";

// Senha do banco de dados (vazia por padrão no XAMPP)
$password = "";

// Nome do banco de dados que será utilizado
$dbname = "barbearia";

try {
    // Cria uma nova conexão PDO com o banco de dados MySQL usando os dados fornecidos
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Define o modo de erro da conexão PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Se quiser testar se a conexão foi bem-sucedida, pode descomentar a linha abaixo
    // echo "Conexão bem-sucedida";
} catch(PDOException $e) {
    // Captura qualquer erro de conexão e exibe a mensagem de erro
    echo "Conexão falhou: " . $e->getMessage();
}
?>