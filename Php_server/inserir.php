<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">

<?php

session_start();
include 'estudante.php';
$username = $_POST["username"];
$password = $_POST["password"];

if (mysqli_connect_errno()) {
            echo "FALHA " . mysqli_connect_error();
        } else {
            
            $sql = "insert into utilizador (username,password)
				values ('".$username.",".$password.".');";
            
            if($coneao->query($sql)===TRUE){
                echo "resgisto ok";
            }
            else{
                
                echo "resgisto nao ok";
            }
        }
                    $sql = "SELECT * FROM utilizador";
            $result = $coneao->query($sql);//faz o update

?>