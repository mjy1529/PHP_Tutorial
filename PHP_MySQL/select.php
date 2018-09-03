<?php
	$conn = mysqli_connect("localhost", "root", "root1111", "opentutorials");

	//데이터를 1000개만 가져오기
	//$sql = "SELECT * FROM topic LIMIT 1000";

	//1 row
	echo "<h1>Single Row</h1>";
	$sql = "SELECT * FROM topic WHERE id = 13";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	echo '<h2>'.$row['title'].'</h2>'; //연관배열
	echo $row['description'];

	//all rows
	echo "<h1>Multi Rows</h1>";
	$sql = "SELECT * FROM topic";
	$result = mysqli_query($conn, $sql);

	//PHP에선 NULL은 false와 같다!!
	while($row = mysqli_fetch_array($result)) {
		echo '<h2>'.$row['title'].'</h2>';
		echo $row['description'];
	}
?>
