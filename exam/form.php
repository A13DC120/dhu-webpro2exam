<?php
try{
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;','root','');
	$stmt = $pdo->query('SELECT * FROM rooms');
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo implode(', ', $row) . PHP_EOL . '<br />';
    }
}catch(PDOException $e){
	var_dump($e->getMessage());
}
$pdo=null;
?>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>


</body>
</html>