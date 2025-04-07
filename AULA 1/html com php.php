<?php 
$nome = "Johnny"; 
$frutas = ["Maçã", "Banana", "Laranja"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTEGRAÇÃO</title>
</head>
<body>
    <h1>Olá, <?php echo $nome; ?></h1>

    <ul>
        <?php foreach($frutas as $fruta)?>
        <li>  <?php $fruta?> </li>
       
    </ul>
</body>
</html>