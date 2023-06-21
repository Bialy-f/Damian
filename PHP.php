<?php
 if(isset($_POST["submit"])){
    if($_POST["haslo"] == "sekret1"){
       ?>
     Tutaj jest chroniona zawartość...
      <?php
    }
    else{
       echo "Nieprawidłowe hasło";
    }
 }
 else{
   echo "Wprowadź hasło";
 }
 ?>
 <form method="POST">
     <input type="password" name="haslo" placeholder="Podaj hasło">
     <input type="submit" name="submit" value="Wyślij">
 </form>