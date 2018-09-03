<?php
	// ** PHP와 MySQL 연결하기 ** //
	//mysqli_connect() : PHP에서 MySQL을 연결해주는 함수
	//사용법 : mysqli_connect(아이피, 아이디, 비밀번호, DB명);
	$conn = mysqli_connect("localhost", "root", "root1111", "opentutorials");
	$sql =  "
		INSERT INTO topic
			(title, description, created)
			VALUES (
					'MySQL',
					'MySQL is ...',
					NOW()
				)
	";

	//mysqli_query() : MySQL 서버로 쿼리 전송
	$result = mysqli_query($conn, $sql); //return값 true or false

	if($result == false) {
		//mysqli_error() : 에러 출력
		echo mysqli_error($conn);
	}

?>
