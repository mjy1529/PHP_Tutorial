<?php
$conn = mysqli_connect("localhost", "root", "root1111", "opentutorials");

// mysqli_real_escape_string()으로 SQL 주입 공격을 차단할 수 있음!!
$filtered = array(
	'title' => mysqli_real_escape_string($conn, $_POST['title']),
	'description' =>mysqli_real_escape_string($conn, $_POST['description'])
);

$sql = "
	INSERT INTO topic
	(title, description, created)
	VALUES (
			'{$_POST['title']}',
			'{$_POST['description']}',
			NOW()
		)
";

/*
SQL injection 공격의 원리
** sql에서 --는 주석 표시
** 사용자가 descript에
		', '2018-1-1 00:00:00');
	 을 입력한다면 mysql에 아래와 같은 명령문으로 실행되게 된다!! **
INSERT INTO topic(title, description, created) VALUES('HEHE', 'haha', '2018-1-1 00:00:00'); --',NOW());

따라서 이를 방지하기 위해 mysqli_real_escape_string()을 사용한다!! (중요)
*/

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
