<?php
    function carregaString($arquivo){
        $arq = fopen($arquivo, "r");
        if($arq !== false){
            $string = fgets($arq);
            if($string !== false){
                fclose($arq);
                return $string;
            }
        }
        fclose($arq);
        $stringErro = "erro na leitura de arquivo";
        return $stringErro;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Arquivos - Exibicao</title>
    </head>
    <body>
        <main>
            <div class="container">
                <table class="table">
                    <tr>
                        <th>Email</th>
                        <th>Senha Hash</th>
                    </tr>
                    <?php
                        $email = carregaString("../ex3/php/email.txt");
                        $email = htmlspecialchars($email);
                        $hash = carregaString("../ex3/php/senhaHash.txt");
                        echo "<tr><td>$email</td><td>$hash</td></tr>";
                    ?>
                </table>
            </div>
        </main>
    </body>
</html>
