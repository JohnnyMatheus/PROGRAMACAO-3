<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario aula 5</title>
</head>
<body>
    <h2>Login</h2>
    <form action="processa.php" method="post">
        <label for="">Nome:</label><br/>
        <input type="text" name="nome" required><br><br>

        <label for="">E-mail</label><br>
        <input type="email" name="email" required><br><br>

        <label for="">Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <label for="">Lembrar meu E-mail</label><br>
        <input type="checkbox" name="lembrar" value="1"><br><br>

        <button type="submit">Acessar</button>

    </form>
</body>
</html>