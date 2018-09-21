<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Function</title>
</head>
<body>
	<h1>Function</h1>
	<h2>Basic</h2>
	<?php
		function basic() {
			print("Lorem ipsum dolor2<br>");
			print("Lorem ipsum dolor2<br>");
		}
		basic();
		basic();
	?>
	<h2>parameter 매개변수 &amp; argument 실제 입력값</h2>
	<?php
		function sum($left, $right) {
			print($left + $right);
			print("<br>");
		}
		sum(2,4);
		sum(4,6);
	?>
	<h2>return</h2>
	<?php
		function sum2($left, $right) {
			return $left + $right;
 		}
 		print(sum2(2,4));
		//result.txt 파일이 생성되며 파일에 sum2(2,4)의 리턴값이 출력됨.
		file_put_contents('result.txt', sum2(2,4));
	?>
</body>
</html>
