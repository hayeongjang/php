<?php
require('top.php');
 ?>
  <body>
    <h1>글 쓰기</h1>
    <form action="insert.php" method="post">
    <p>
      <label for="name">이름 :</label>
      <input type="text" id="name" name="name">
    </p>
    <p>
      <label for="message">메시지 :</laber>
      <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </P>
    <input type="submit" value="글 쓰기">
  </form>
  </body>
</html>
