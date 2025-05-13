<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

    <form action="process_register.php" method="POST">
        <h2>Criar Conta</h2>

        Nome: <input type="text" name="nome" required><br>

        Email: <input type="email" name="email" required><br>

        Senha: <input type="password" name="senha" required><br>

        <button type="submit">Cadastrar</button>

        <p>Já tem conta? <a href="login.php">Entrar</a></p>
    </form>

</body>
</html>
