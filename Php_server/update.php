
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $email = $_GET["email"];
        $coneao = mysqli_connect("localhost", "root", "", "face");
        if (mysqli_connect_errno()) {
            echo "FALHA " . mysqli_connect_error();
        } else {
            
            $sql="update utilizador set email='".$email."';";
            
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
    </body>
</html>
.
 */

