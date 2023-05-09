<?php
class Database
{
    private $db;

    function __construct()
    {
        try {
            $this->db = new PDO(
                "mysql:host=localhost;dbname=studentreg",
                "root",
                ""
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;
            //print('db connected');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    function signup($name, $email, $password)
    {
        try {
            $sql = "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, ?, ?, ?);";
            $st = $this->db->prepare($sql);
            $st->execute(array($name, $email, $password));
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    function signin($email, $password)
    {
        $sql = "SELECT id FROM `users` WHERE `email` = ? AND `password` = ?;";
        $st = $this->db->prepare($sql);
        $st->execute(array($email, $password));

        if ($st->rowCount() == 1) {
            return true;
        } else {
            false;
        }
    }
}
