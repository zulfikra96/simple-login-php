<?php

require "env.php";

try{

    $db = new PDO("{$db_engine}:host={$db_host};dbname={$db_name}",$db_username,$db_password);
}catch(PDOException $e){
    die($e);
}

