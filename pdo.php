<?php
function connect() {
    $host = 'ec2-54-227-249-201.compute-1.amazonaws.com';
    $port = '5432';
    $dbname = 'd6us4n0714okvh';
    $user = 'jndjrkttkozvev';
    $password = '7fbe7e839fe5fcae696541c8c08ed44e805f5d0d2e6cae7ba8336dcd9711fffa';

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