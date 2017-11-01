<?php require "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Document</title>
</head>
<body>
    <br><br><br><br>
    <div class="col-md-12">
        <div class="col-md-4 col-md-offset-4">
            <form action="login.php" method="POST">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <label for="">Login</label>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control" value="Login">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php
        $select = $db->prepare("SELECT * FROM users");
        $select->execute();
        $fetch  = $select->fetchAll();
    ?>
    <div class="col-md-4 col-md-offset-4">
        <h1 align="center">Data Table</h1>
        <table class="table table-default">
            <tr>
                <th>id</th>
                <th>fullname</th>
                <th>username</th>
                <th>password</th>
            </tr>
        
            <?php if(count($fetch) > 0):?>
                <?php foreach($fetch as $row): ?>
                <tr>
                    <td><?= $row['id']?></td>
                    <td><?= $row['fullname']?></td>
                    <td><?= $row['username']?></td>
                    <td><?= $row['password']?></td>                  
                </tr>    
                <?php endforeach;?>
            <?php endif;?>
        </table>
    </div>
</body>
</html>