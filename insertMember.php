<?php



if(isset($_POST['nomPersonnage'])){

	$nomPersonnage = $_POST['nomPersonnage'];


	$req = $bdd->query("SELECT * FROM personnage WHERE nomPersonnage =  '".$nomPersonnage."'");
    $afficherPersonnage = $req->fetch();
        
       if($afficherPersonnage == ""){	
      
      $insertPersonnage = $bdd->prepare("INSERT INTO personnage (nomPersonnage) VALUES (?)");
      $insertPersonnage->execute(array($nomPersonnage));
      $message = '
      <div class="alert alert-success animate__animated animate__rubberBand" id="messageSuccess" role="alert">
      	<h4 class="alert-heading">Bravo!</h4><p>'.ucfirst($nomPersonnage).' a été ajouté dans notre base de données avec succès</p>
      </div>';
      
      
  	}
  	else{
  		
  		$message = '
  		<div class="alert alert-danger animate__animated animate__shakeX" id="messageError" role="alert">
  			<h4 class="alert-heading-danger">Erreur!</h4><p>'.ucfirst($nomPersonnage).' existe déja dans notre base de données. Veuillez saisir vos initiales svp !</p>
  		</div>';
  		
  		
  	}
}
