
<?php

function getMaxId(){
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;','root','');
	$stmt = $pdo->prepare('SELECT MAX(id) from messages');
	if($stmt->execute()){
		$r=$stmt->fetch(PDO::FETCH_NUM);
		$r[0]++;
		return $r[0];
	}
}

$pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;','root','');
$stmt = $pdo->prepare("INSERT INTO messages(id,room_id,sent_at,content) VALUES(?,?,now(),?)");
$stmt->execute(array(getMaxId(),$_POST['room_id'], $_POST['message']));


header('location: index.php?room_id='.$_POST['room_id']);
exit();//←忘れずに！
?>
