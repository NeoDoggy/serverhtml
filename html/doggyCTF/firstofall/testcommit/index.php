<html>
  <head>
    <meta charset="utf-8">
    <title>enter password</title>
  </head>
  <body style="background-color:black">
	<table width="1500" height="10">
　      <tr><td align="left">
                <p style = "font-family:garamond,serif;font-size:16px;">
                <font color="#32CD32">
    		<?php
   		if($_SERVER['PHP_AUTH_USER'] != "testcommit" || $_SERVER['PHP_AUTH_PW'] != "passwd"){
      		header("WWW-Authenticate: Basic realm='test'");
      		echo "[System] > Permission denied<br>[System] > echo.tip > You idot, I told you the username and password just before ten seconds !<br>";
      		exit();
     		}
		header("Location: http://yiarashi.com/user9/firstofall/testcommit/congrats/");
		exit();
    		?>
		</font>
                </p>
        </td></tr>
        </table>
  </body>
</html>
