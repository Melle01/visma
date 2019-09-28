<?php

$user = $_POST ["user"];
$email = $_POST ["email"];
$password = $_POST ["password"];
$password2 = $_POST ["password2"];

if ($password == $password2) {
	$mypassword = $password;
} else{
	$mypassword = "Ditt lösenord fungerade tyvärr inte";
}


include("inc/header.php")



  ?>



  <div class="nav">

  <div class="headline"><div><img src="img/logo.svg" style="width:128px;"></div><div style="padding-left: 10px; font-size: 28px;">Taxi
  </div></div>

  <div class="links"><a href="index.php">Logga ut</a></div>

 </div>

<div class="container">

<div class="registrerat">

<h2>Välkommen. Du har nu registrerat dig <?php echo $user. "<br>". $email. "<br>". $mypassword; 
?></h2>

</div>


</div>

  <?php

include("inc/footer.php")

  ?>