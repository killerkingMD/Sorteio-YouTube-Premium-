!DOCTYPE html>
<html>
<head>
    <title>Sorteio Online</title>
</head>
<body>
    <h1>Resultado do Sorteio</h1>
    
    <?php
    $participantes = array();

    if(isset($_POST['nome'])) {
        $participantes[] = $_POST['nome'];
    }

    if(count($participantes) > 0) {
        $vencedor = array_rand($participantes);
        echo '<p>O vencedor do sorteio é: ' . $participantes[$vencedor] . '</p>';
    } else {
        echo '<p>Não há participantes no sorteio ainda.</p>';
    }
    ?>

    <a href="index.php">Voltar para o sorteio</a>
</body>
</html>
