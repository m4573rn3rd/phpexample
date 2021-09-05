<?php
    function getConnection()
    {
        $host = 'yourhost';
        $db_name = 'yourdatabase';
        $username = 'database_user';
        $password = 'database_user_password';
        $conn= new mysqli($host, $username, $password, $db_name);
        if ($conn->connect_error) {
            $conn= null;
        }
        return $conn;
    }
?>