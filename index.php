<?php
require_once(__DIR__ . '/pdo.php');

$pdo = connect();

$sql = 'select * from sample;';
$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_UNIQUE);

foreach ($rows as $key => $row) :
?>
<h3>id: <?= $key ?></h3>
<div>name: <?= $row['name'] ?></div>
<div>text: <?= $row['text'] ?></div>
<?php
endforeach;
