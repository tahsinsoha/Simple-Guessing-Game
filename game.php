<title>SABIHA TAHSIN SOHA</title>
<h1>Welcome to my guessing game</h1>

<?php



if(is_numeric($_GET['guess']) and $_GET['guess']>(13)) echo"Your guess is too high";

elseif( is_numeric($_GET['guess']) and$_GET["guess"]<13) echo"Your guess is too low";

elseif( is_numeric($_GET['guess']) and$_GET["guess"]==13) echo"Congratulations - You are right";

elseif($_GET["guess"] == null) echo "Your guess is too short";

elseif (!is_numeric($_GET['guess'])) {
    echo "Your guess is not a number";
  }
  else {
    echo "Missing guess parameter";
  }

?>