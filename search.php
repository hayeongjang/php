<?php
require('top.php');
 ?>
  <body>
    <h1>Programing Language</h1>
    <h2>검색 결과</h2>
  <ul>
<?php
require('list.php');
?>

    <?php
    $user_skey = $_POST['skey'];
// POST 방식으로 넘어온 파라미터 값(skey)을 변수에 저장
    $sql = "SELECT * FROM msg_board WHERE message LIKE '%$user_skey%'";
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
    <p><a href="index.php">메인 화면으로 돌아가기</a></p>
  </body>
</html>
