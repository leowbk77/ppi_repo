<?php
    $email = $_POST["mail"];
    $senha = $_POST["passwd"];
    
    $arquivoDoEmail = "email.txt";
    $arquivoDaSenha = "senhaHash.txt";

    function salvaString($string, $arquivo){
        $arq = fopen($arquivo, "w");
        fwrite($arq, $string);
        fclose($arq);
    }

    salvaString($email, $arquivoDoEmail);
    $hashDaSenha = password_hash($senha, PASSWORD_DEFAULT);
    salvaString($hashDaSenha, $arquivoDaSenha);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Dados</title>
    </head>
    <body>
        <main>
            <div class="container">
                <div>
                    <h2>Dados inseridos!</h2>
                </div>
            </div>
        </main>
    </body>
</html>