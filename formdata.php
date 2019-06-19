<?php

$result = mail ("whitevipx@gmail.com", "Anketa","Messadge (body mail)", "Information: /n
/nAnketa: names: $_POST[name] /npassword: $_POST[assword] /ntime: $_POST[time]  /nsleep: $_POST [sleep] hours");



	if ($result)  {
	echo "<p>Messadge send</p>";
		}
	else {
	echo "<p>ERROR</p>";
		}


?>
