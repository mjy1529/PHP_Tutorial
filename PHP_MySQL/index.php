<?php
	$conn = mysqli_connect("localhost", "root", "root1111", "opentutorials");

	$sql = "SELECT * FROM topic";
	$result = mysqli_query($conn, $sql);
	$list = '';
	while($row = mysqli_fetch_array($result)) {
		//<li><a href=\"index.php?id=13\">MySQL</a></li>
		$list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>WEB</title>
</head>
<body>
<h1>WEB</h1>
<ol>
	<?=$list?>
</ol>
<a href="create.php">create</a>
<h2>Welcome</h2>
Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</body>
</html>
