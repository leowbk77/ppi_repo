<?php
    require "conexaoMysql.php";
    $pdo = mysqlConnect();

    $cep = $_POST["cep"] ?? "";
    $logradouro = $_POST["logradouro"] ?? "";
    $bairro = $_POST["bairro"] ?? "";
    $cidade = $_POST["cidade"] ?? "";
    $estado = $_POST["estado"] ?? "";

    try {
        $sql = <<<SQL
        INSERT INTO cadastrados (cep, logradouro, bairro, cidade, estado)
        VALUES (?, ?, ?, ?, ?)
        SQL;

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$cep, $logradouro, $bairro, $cidade, $estado]);

        header("location: exibeCadastrados.php");
        exit();
    } catch (Exception $e) {
        exit(' ' . $e->getMessage());
    }
?>