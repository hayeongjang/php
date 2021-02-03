<?php
require('top.php');
 ?>
  <body>
    <h1>Programing Language</h1>
    <h2>삭제 결과</h2>
  <ul>
<?php
require('list.php');
?>
    <?php
    $user_delnum = $_POST['delnum'];

    $sqlDEL = "DELETE FROM msg_board WHERE number = $user_delnum";
    mysqli_query($conn, $sqlDEL);
    //해당 값 삭제

    $sql = "SELECT * FROM msg_board";
    $result = mysqli_query($conn, $sql);
    $list = '';

    while($row = mysqli_fetch_array($result)) {
      $list = $list."<li>{$row['number']}:
      <a href=\"view.php?number={$row['number']}\">{$row['name']}</a></li>";
    }
      echo $list;
      mysqli_close($conn);
    ?>
    </ul>
    <p>
    <?php
      echo $user_delnum . '번째 데이터가 삭제되었습니다.';
     ?>
    </p>
    <p><a href="index.php">메인 화면으로 돌아가기</a></p>
  </body>
</html>
