<?php
    require "conexaoMysql.php";
    $pdo = mysqlConnect();

    try {          
        $sql = <<<SQL
        SELECT cep, logradouro, bairro, cidade, estado
        FROM cadastrados
        SQL;
        
        $stmt = $pdo->query($sql);
    } catch (Exception $e) {
        exit(' ' . $e->getMessage());
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <title>Enderecos cadastrados</title>
</head>
<body>
    <div class="container">
        <table class="table table-striped table-hover">
            <tr>
                <th>CEP</th>
                <th>LOGRADOURO</th>
                <th>BAIRRO</th>
                <th>CIDADE</th>
                <th>ESTADO</th>
            </tr>
            <?php
                while($row = $stmt->fetch()){
                    $cep = htmlspecialchars($row['cep']);
                    $logradouro = htmlspecialchars($row['logradouro']);
                    $bairro = htmlspecialchars($row['bairro']);
                    $cidade = htmlspecialchars($row['cidade']);
                    $estado =htmlspecialchars($row['estado']);

                    echo <<<HTML
                    <tr>
                        <td>$cep</td>
                        <td>$logradouro</td>
                        <td>$bairro</td>
                        <td>$cidade</td>
                        <td>$estado</td>
                    </tr>
                    HTML;
                }
            ?>
        </table>
    </div>
    
</body>
</html>