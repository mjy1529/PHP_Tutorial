<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array</title>
</head>
<body>
	<h1>Array</h1>
	<?php
		//배열의 표현식
		$coworkers = array('egoing', 'leezche', 'duru', 'teaho');
		echo $coworkers[1].'<br>';
		echo $coworkers[3].'<br>';

		//배열의 크기를 알아내는 방법 : count()
		echo count($coworkers).'<br>';
		var_dump(count($coworkers).'<br>');

		//배열에 데이터 추가 : array_push()
		array_push($coworkers, 'graphittie');
		var_dump($coworkers);
	?>
</body>
</html>
