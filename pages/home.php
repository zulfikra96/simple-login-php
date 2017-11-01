<?php 

    session_start();
    if(is_null($_SESSION['username'])){
        header("location:../index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/styles/style.css">

    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>ini home</h1>
        <h1>hello "<?=$_SESSION['username']; ?>"</h1>
        <form action="" method="POST">
            <button class="btn btn-default" name="logout" value="logout">Logout</button>
        </form>
    </div>
</div>
</body>
</html>

<?php

    if(isset($_POST['logout'])){
        
        $logout = $_POST['logout'];
        if($logout){
            session_destroy();
            header("location:../index.php");
        }

    }


?>