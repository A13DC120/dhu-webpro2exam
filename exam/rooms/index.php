<!DOCTYPE html>
<html lang="ja">
<body>
	<h1>ルーム一覧</h1>
	<h2>発信したいルームを選んでください</h2>
    <ul>
    <?php

	$pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;','root','');
	//$stmt = $pdo->query('SELECT * FROM rooms');
	foreach ($pdo->query('SELECT * FROM rooms') as $row){
		echo "<li><a href='http://localhost/dhu-webpro2exam/exam/messages/?room_id=".$row["id"]."'>".$row["name"]."</a></li><br>";
}
?>
</ul>
</body>
</html>