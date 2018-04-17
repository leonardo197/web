<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>Index</title>

    </head>
    <body>
        <div class="col-sm-12">
            <div class="well">
                <form class="form-horizontal" action="login.php" method="POST">
                    <div class="form-group"> 
                        <label class="control-label" for="pwd">Username:</label>    
                        <input type="text" class="form-control" name="username" placeholder="Coloque username"> 
                    </div> 
                    <div class="form-group"> 
                        <label class="control-label" for="pwd">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Coloque a password">
                        <br>
                    </div> 
                    <input type="submit" class="btn btn-success" value="Invocar">
                </form>
            </div>
        </div>
    </body>
</html>
