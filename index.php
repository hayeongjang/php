<?php
require('top.php');
 ?>
  <body>
    <h1>Programing Language</h1>
    <h2>LIST</h2>
  <ul>
<?php
require('list.php');
?>

    <?php
    $sql = "SELECT * FROM msg_board";
    $result = mysqli_query($conn, $sql);
    $list = '';
//msg_board 테이블에서 글 조회

    while($row = mysqli_fetch_array($result)) {
//배열 형식으로 출력 ($row)
      $list = $list."<li>{$row['number']}:
      <a href=\"view.php?number={$row['number']}\">{$row['name']}</a></li>";
    }
//GET 방식으로 데이터 넘겨서 출력 (view는 인덱스 번호에 해당하는 값을 보여줌)
      echo $list;
    ?>
    </ul>

      <p><a href="write.php">글 쓰기</a></p>

    <h2>SEARCH</h2>
    <form action="search.php" method="post">
      <h3>검색 할 키워드를 입력하세요.</h3>
    <p>
      <label for="search">키워드 :</label>
      <input type="text" id="search" name="skey">
    </p>
      <input type="submit" value="검색">
    </form>

    <h2>DELETE</h2>
    <form action="delete.php" method="post">
      <h3>삭제 할 메시지 번호를 입력하세요.</h3>

    <p>
      <label for="msgdel">번호 :</label>
      <input type="text" id="msgdel" name="delnum">
    </P>
    <input type="submit" value="삭제">
    </form>
  </body>
</html>
