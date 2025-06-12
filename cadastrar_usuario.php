<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar usuário</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <form action="processar_cadastro.php" method="POST">
        <label for="usuario">Nome:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
    <p><a href="index.php">Voltar</a></p>
   

    
</body>
</html>