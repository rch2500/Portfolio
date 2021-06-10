<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=roberthe_pht_db', 'roberthe_pht_user', 'myP4ssw0rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'home\error.html.php';
  exit();
}

try
{
  $sql = 'SELECT * FROM content WHERE id=1';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Index.php: Error fetching DATA: ' . $e->getMessage();
  include 'includes\error.html.php';
  exit();
}


include 'home/home.html.php';
