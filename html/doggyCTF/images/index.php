<html>
  <head>
    <meta charset="utf-8">
    <title>enter password</title>
  </head>
  <body>
    <?php
    if($_SERVER['PHP_AUTH_USER'] != "NeoDoggy" || $_SERVER['PHP_AUTH_PW'] != "Bober093"){
      header("WWW-Authenticate: Basic realm='test'");
      echo "帳密錯誤喔！";
      echo '<img src="https://i.imgur.com/EzFHeCv.jpg" class="center" alt="xxx">' ;
      exit() ;
     }
    $alt="flag{hi}" ;
    echo "Logined" ;
    ?>
    <img src="https://i.imgur.com/EzFHeCv.jpg" class="center" alt="<?php echo $alt ; ?>">
  </body>
</html>
