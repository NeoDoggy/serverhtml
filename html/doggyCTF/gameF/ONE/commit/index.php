<html>
  <head>
    <meta charset="utf-8">
    <title>commit.php</title>
  </head>
  <body style="background-color:black">
	<table width="1500" height="10">
　      <tr><td align="left">
                <p style = "font-family:garamond,serif;font-size:16px;">
                <font color="#32CD32">
    		<?php
   		if($_SERVER['PHP_AUTH_USER'] != "DOLL" || $_SERVER['PHP_AUTH_PW'] != "creepy"){
      		header("WWW-Authenticate: Basic realm='test'");
      		echo '[System] > Permission denied<br>[System] > echo.tip > usn{"question.page.title"} !<br>';
      		exit();
     		}
		header("Location: http://yiarashi.com/user9/gameF/delete16/");
		exit();
    		?>
		</font>
                </p>
        </td></tr>
        </table>
  </body>
</html>
