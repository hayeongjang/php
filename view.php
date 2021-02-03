<?php
require('list.php');
?>

<?php
$view_num = $_GET['number'];
$sql = "SELECT * FROM msg_board WHERE number = $view_num";
$result = mysqli_query($conn, $sql);
?>

<?php
require('top.php');
 ?>
  <body>
    <h1>Programing Language</h1>
    <h2>글 내용</h2>
    <?php
    if($row = mysqli_fetch_array($result)) {
    ?>

    <h3>글 번호 : <?= $row['number'] ?>
      , 언어 : <?= $row['name'] ?></h3>

    <div>
      <?= $row['message'] ?>
    </div>
  <?php } ?>
  <p><a href="index.php">메인 화면으로 돌아가기</p>

  </body>
</html>
