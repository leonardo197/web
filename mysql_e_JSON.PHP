<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $conecao = mysqli_connect("127.0.0.1", "root", "", "facebook");
            $sql = "select * from utilizador where username = 'miguel'";
            $result = $conecao->query($sql);
            
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo json_encode($row);
            }
        ?>
    </body>
</html>