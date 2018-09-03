<?php
$conn = mysqli_connect("localhost", "root", "root1111", "opentutorials");

$sql = "
	INSERT INTO topic
	(title, description, created)
	VALUES (
			'{$_POST['title']}',
			'{$_POST['description']}',
			NOW()
		)
";

$result = mysqli_query($conn, $sql);
if($result == false) {
	echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';

	//apache2/logs/error.txt에 저장 (클라이언트에게 보여주지 않고 확인하는 방법)
	//error_log()
	error_log(mysqli_error($conn));

} else {
	echo '성공했습니다. <a href="index.php">돌아가기</a>';
}
?>
