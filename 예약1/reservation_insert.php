<head><meta content="text/html; charset=utf-8"></head>
<?php
	if ( !$con = oci_connect("B889006", "B889006", "$db_sid, "AL32UTF8"))exit();

	$비밀번호=$_POST["비밀번호"];
	$전공=$_POST["전공"];
	$내용 = $_POST["내용"];
	$예약자= $_POST["예약자"];

	$mDate= date("Y-m-j");

	$sql = " INSERT INTO 예약 VALUES ('".$전공"', '".$비밀번호"',";
	$sql = sql.$내용.", '".$예약자."', 'yyyy-mm-dd'))";

	$ret = oci_execute(oci_parse($con, $sql));

	echo "<h1> 신규 회원 입력 결과 </h1>";
	if($ret)
		echo"데이터가 성공적으로 입력됨.";
	else
		echo "데이터 입력 실패!!!"."<br>";
	echo "<br> <a href='\main.html'> <-- 초기화면</a> ";

	oci_close($con);
?>
