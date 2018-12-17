<?php
function connect() {
    $host = 'ec2-54-227-289-358.compute-1.amazonaws.com';
    $port = '5488';
    $dbname = 'd6us4nmkcgvtr';
    $user = 'adkrxzirm';
    $password = 'asdakrase';

    $dsn = 'pgsql:host=' . $host .
       ';port=' . $port .
       ';dbname=' . $dbname;

    try {
        $pdo = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }

    return $pdo;
}
