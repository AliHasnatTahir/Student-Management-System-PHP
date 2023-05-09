<?php
require_once('database.php');

$db = new Database();

$name = $_POST['Name'];
$ema = $_POST['Email'];
$pass = md5($_POST['Password']);

$res = $db->signup($name, $ema, $pass);

if($res === true){
    header('location:index.php?rid=3');
}
else{
    header('location:signup.php?rid=4');
}
