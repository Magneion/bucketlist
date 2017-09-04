<?php
$config = new \Doctrine\DBAL\Configuration();
include("config/db.php");
$connection = new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_base
);

?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="vendor/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" />
  <title>PHP - Doctrine : la bucket list</title>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="nav">
        <ul class="nav navbar-nav">
          <li><a href="index.php"><i class="glyphicon glyphicon-home"></i>&nbsp;Accueil</a></li>
          <li><a href="todolist.php"><i class="glyphicon glyphicon-th-list"></i>&nbsp;Tâches</a></li>
          <li><a href="create-todos.php"><i class="glyphicon glyphicon-plus"></i>&nbsp;Ajouter une tâche</a></li>
        </ul>
      </div>
    </div>
  </nav>
