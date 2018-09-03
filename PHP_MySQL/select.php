<?php
	$conn = mysqli_connect("localhost", "root", "root1111", "opentutorials");

	//데이터를 1000개만 가져오기
	//$sql = "SELECT * FROM topic LIMIT 1000";

	$sql = "SELECT * FROM topic WHERE id = 13";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	echo '<h1>'.$row['title'].'</h1>'; //연관배열
	echo $row['description'];
?>
