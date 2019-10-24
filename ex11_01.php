<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>
<?php
  session_start();
  $_SESSION["time"] = time();
  $_SESSION["session_id"] = session_id();

  header("Location: ex11_02.php");
  exit;
?>
  </title>
</head>
<body>
</body>
</html>