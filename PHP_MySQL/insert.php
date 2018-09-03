<?php
	// ** PHP와 MySQL 연결하기 ** //
	//mysqli_connect() : PHP에서 MySQL을 연결해주는 함수
	//사용법 : mysqli_connect(아이피, 아이디, 비밀번호, DB명);
	$conn = mysqli_connect("localhost", "root", "root1111", "opentutorials");
	
	mysqli_query($conn, "
		INSERT INTO topic
			(title, description, created)
			VALUES (
					'MySQL',
					'MySQL is ...',
					NOW()
				)
	");
?>
