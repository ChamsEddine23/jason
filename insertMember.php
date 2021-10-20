<?php



if(isset($_POST['nomPersonnage'])){

	$nomPersonnage = $_POST['nomPersonnage'];

	// confirmation ( !isset() ) nomPersonnage
	$req = $bdd->query("SELECT * FROM personnage WHERE nomPersonnage =  '".$nomPersonnage."'");
    $afficherPersonnage = $req->fetch();
        
       if($afficherPersonnage == ""){	
      
      $insertPersonnage = $bdd->prepare("INSERT INTO personnage (nomPersonnage) VALUES (?)");
      $insertPersonnage->execute(array($nomPersonnage));
	       // message alert registration success
      $message = '
      <div class="alert alert-success" role="alert">
      	<h4 class="alert-heading">Bravo!</h4><p>'.ucfirst($nomPersonnage).' a été ajouté dans notre base de données avec succès</p>
      </div>';
      
      
  	}
  	else{
  		// error nomPersonnage exist
  		$message = '
  		<div class="alert alert-danger" role="alert">
  			<h4 class="alert-heading-danger">Erreur!</h4><p>'.ucfirst($nomPersonnage).' existe deja dans notre base de données. Veuillez saisir ces initial svp!</p>
  		</div>';
  		
  		
  	}
}
