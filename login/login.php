<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">

<?php

session_start();
include 'estudante.php';
$username = $_POST["username"];
$password = $_POST["password"];

$encontrado = false;

for ($x = 0; $x < sizeof($estudante); $x++) {
    echo $estudante[$x]->getNome();
    if ($username == $estudante[$x]->getUsername() && $password == $estudante[$x]->getPassword()) {
        $_SESSION["username"] = $username;
        $encontrado=true;
        echo "Autenticado como $username" . "</br>";
        ?>
        <a class="btn btn-danger" href="logout.php">Sair</a>
        <?php
        break;
    }
}

    if(!$encontrado) {
        include("index.php");
    }

?>