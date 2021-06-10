<?php
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=roberthe_portfolio', 'roberthe_portfolio_user', 'uV^L,p4z1V,r');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
    }
    catch (PDOException $e)
    {
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}
?>