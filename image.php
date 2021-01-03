<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>News </title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Quotes</h2>
					<p>
					
					&ldquo;It's better to travel well </br>than to arrive.&rdquo; <span>- Buddha -</span>
					</p>
					
					
				</div>
				<hr>
				</br>
				<div>
					
					<p>
						&ldquo;Wherever you go go with all your heart.&rdquo; <span>- Confucius -</span>
					</p>
				</div>
			</div>
			<div class="main">
				<h1>News</h1>
				<ul class="news">
					<li>
						<div class="box">
<?php
   $bdd=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
   $req=$bdd->query('SELECT Image FROM album where album.id=8');
   while($donnees=$req->fetch()){
	   echo('<img style="width:220px;height:225px;border-radius;:500px;"src= "' .$donnees['Image'] . '"/><br/>');
   }
  



?>
</div>

						<h2><?php
   $bdd=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
   $req=$bdd->query('SELECT Titre FROM album where album.id=8');
   while($donnees=$req->fetch()){
	   echo('' .$donnees['Titre'] . '<br/>');
   }
   
?> </h2>
						<p>
						
					<?php
   $bdd=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
   $req=$bdd->query('SELECT Article FROM album where album.id=8');
   while($donnees=$req->fetch()){
	   echo('' .$donnees['Article'] . '<br/>');
   }
  
?>
						</p>	
					</li>
				







				<li>
						<div class="box">
							
							
							<?php
   $bdd=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
   $req=$bdd->query('SELECT Image FROM album where album.id=9');
   while($donnees=$req->fetch()){
	   echo('<img style="width:220px;height:225px;border-radius;:500px;"src= "' .$donnees['Image'] . '"/><br/>');
   }


?>
						</div>
						<p class="info">
							
						</p>
						<h2><?php
   $bdd=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
   $req=$bdd->query('SELECT Titre FROM album where album.id=9');
   while($donnees=$req->fetch()){
	   echo('' .$donnees['Titre'] . '<br/>');
   }
  



?></h2>
						<p>
							<?php
   $bdd=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
   $req=$bdd->query('SELECT Article FROM album where album.id=9');
   while($donnees=$req->fetch()){
	   echo('' .$donnees['Article'] . '<br/>');
   }
  



?>
						</p>
						
					</li>
					
					
					
					
					
					
					
					
					
					
					
					<li>
						<div class="box">
						<?php
   $bdd=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
   $req=$bdd->query('SELECT Image FROM album where album.id=10');
   while($donnees=$req->fetch()){
	   echo('<img style="width:220px;height:225px;border-radius;:500px;"src= "' .$donnees['Image'] . '"/><br/>');
   }
  



?>
						
						
						
						
						</div>
						
						<h2><?php
   $bdd=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
   $req=$bdd->query('SELECT Titre FROM album where album.id=10');
   while($donnees=$req->fetch()){
	   echo('' .$donnees['Titre'] . '<br/>');
   }
  



?></h2>
						<p>
<?php
   $bdd=new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','');
   $req=$bdd->query('SELECT Article FROM album where album.id=10');
   while($donnees=$req->fetch()){
	   echo('' .$donnees['Article'] . '<br/>');
   }
  



?>						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Address:</span> 
				</p>
				<p>
					<span>Phone:</span> 
				</p>
				<p>
					<span>Email:</span> 
				</p>
			</div>
			
		</div>
		
				
			</div>
		</div>
	</div>





</body>



</head>

</html>