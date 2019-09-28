<?php

include("inc/header.php")

  ?>


<div class="nav">

 	<div class="headline"><div><img src="img/logo.svg" style="width:128px;"></div><div style="padding-left: 10px; font-size: 28px;">Taxi
 	</div></div>

 	<div class="links"><a href="registrera.php">Registrera dig</a></div>

 </div>

 <div class="container">


 
 <div class="loginbox">
 <h1 style="padding-bottom: 25px;">Logga in </h1>
 <form action="login.php" method="POST">

 <input type="text" name="user" placeholder="Användarnamn">
 <input type="password" name="password" placeholder="Lösenord">
 

</form>

<a href="login.php">  

 <button>Logga in</button>

</a>
	
 </div>

 <img class="firstpageimg" style="height: 550px; position: absolute; top: 200px; left: 10px;"  src="img/Businessman-Transparent.png">

 </div>

 <?php

include("inc/footer.php")

  ?>