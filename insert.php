<?php
require('top.php');
 ?>
  <body>
<?php
require('list.php');
?>

<?php
$user_name = $_POST['name'];
$user_msg = $_POST['message'];
//write.php에서 입력한 값을 POST 방식으로 받고 저장

$sql = "INSERT INTO msg_board (name, message)
        VALUES('$user_name', '$user_msg')" ;
//데이터 베이스 테이블 msg_board에 생성

$result = mysqli_query($conn, $sql);
//데이터 베이스 실행 결과


/* if($result === false) {
  echo '저장하 못했습니다';
  error_log(mysqli_error($conn));
} else {
  echo '저장 성공';
}
*/

mysqli_close($conn);
print "<a href='index.php'>메인 화면으로 이동하기</a>";

?>
</body>
</html>
