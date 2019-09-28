<?php

include("inc/header.php")

  ?>


<div class="nav">

  <div class="headline"><div><img src="img/logo.svg" style="width:128px;"></div><div style="padding-left: 10px; font-size: 28px;">Taxi
  </div></div>

  <div class="links"><a href="index.php">Hem</a></div>

 </div>

 <div class="container">



<div class="regbox">
 <h1 style="padding-bottom: 25px;">Registrera dig! </h1>
 <form action="registrerasvar.php" method="POST">
 <input type="text" name="email" placeholder="Ange email">
 <input type="text" name="user" placeholder="Namn">
 <input type="password" name="password" placeholder="Lösenord">
 <input type="password" name="password2" placeholder="Lösenord">

  
  <button type="submit">Registrera dig</button>
  
 </form>

 </div>
 
 </div>

 <?php

include("inc/footer.php")

  ?>