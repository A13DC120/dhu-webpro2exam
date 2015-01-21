<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8"/>
</head>
<body>
	<h1>メッセージ一覧</h1>
	<h2></h2>
    <ul>
    <?php

	$pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;','root','');
	//$stmt = $pdo->query('SELECT * FROM rooms');
	$stmt=$pdo->prepare('SELECT * FROM messages WHERE room_id = ?');
	if($stmt->execute(array($_GET['room_id']))){
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			//print_r($row);
?>
		<li>
			<ul>
				<li><?php echo $row['content']; ?></li>
				<li><?php echo $row['sent_at'];?></li>
			</ul>
		</li>
<?php

		}
	}
?>
	</ul>
	<form action="Receve.php" method="POST">
	<input type="text" name="message">
	<input type="hidden" name="room_id" value=<?php echo $_GET['room_id'] ?>>
	<button type="submit">送信(*´ω｀*)</button>
</form>
</body>
</html>