<?php
   $bdd=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
   $req=$bdd->query('SELECT Article FROM album where album.id=10');
   while($donnees=$req->fetch()){
	   echo('' .$donnees['Article'] . '"/><br/>');
   }
  



?>