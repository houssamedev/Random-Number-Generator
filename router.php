<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  //collect value of input field
   $rolled = $_GET['roll'];
   $side = $_GET['side'];
   if (empty($rolled)) {
     echo "Number of dices is empty";
   } else {
	 for ($x = 0; $x < intval($rolled); $x++) {
		echo "<div class='face'><span class='pip'>".rand(1,$side)."</span></div>";
	}

   }
 }
?>