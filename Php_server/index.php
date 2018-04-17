<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $coneao = mysqli_connect("localhost", "root", "", "face");
        if (mysqli_connect_errno()) {
            echo "FALHA " . mysqli_connect_error();
        } else {
//            
//            $sql="insert into utilizador (nome,email,tele,pass)
//                    values('novo','por@gmail.com','913456789','123');";
//            
//            if($coneao->query($sql)===TRUE){
//                echo "resgisto ok";
//            }
//            else{
//                
//                echo "resgisto nao ok";
//            }
            $sql = "SELECT * FROM utilizador";
            $result = $coneao->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "id: ".
                    $row["id"] .
                            " - nome" .
                            $row["nome"] .
                            " - " .
                            $row["email"] .
                            "<br>";
                }
            } else {
                echo "0";
            }
        }     
        ?>
    </body>
</html>
