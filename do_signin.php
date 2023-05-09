<?php
require_once('database.php');

$db = new Database();

$un = $_POST['email'];
$pass = md5($_POST['password']);

$res = $db->signin($un, $pass);

if($res === true){
    setcookie('loged_in', true);
    header('location:index.php?rid=1');
}
else{
    header('location:signin.php?rid=2');
}

