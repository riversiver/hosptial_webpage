<?php
    include "./include/session.php";
    include "./include/dbConnect.php";
    /*echo "<pre>";
    var_dump($_POST);*/
    $memberId = $_POST['memberId'];
    $memberPw = md5($memberPw = $_POST['memberPw']);


    $sql = "SELECT * FROM 멤버 WHERE ID = '{$memberId}' AND 비밀번호 = '{$memberPw}'";
    $res = $dbConnect->query($sql);


        $row = $res->fetch_array(MYSQLI_ASSOC);


        if ($row != null) {
            $_SESSION['ses_userid'] = $row['ID'];
            echo $_SESSION['ses_userid'].'님 안녕하세요';
            echo "<a href='./signOut.php'>로그아웃 하기</a>";
        }

        if($row == null){
            echo '로그인 실패 아이디와 비밀번호가 일치하지 않습니다.';
        }
?>
