<?php 
// Inicio a sessão para poder acessaer as variáveis de sassão
session_start();

//verifica se o usuário está logado (se a variável de sessão 'usuario_id' existe
if (!isset($_SESSION['usuario_id'])) {
    // se não estiver logado, redireciona para a página da login
    header(header: "lacation: login.php");
     exit; // Encerra o script imediatamente após o redirecionamento
}

//se ousuário rstiver logado, extibe a mesagem de boas-vidas com o nome armazenado na sessão
echo "<h2>Bem-vindo, " . $_SESSION['nome'] . "!</h2";

// Exibe um link para o usuário sair da conta (logout)
echo "<a href='logout.php'>sair</a>";
?>
