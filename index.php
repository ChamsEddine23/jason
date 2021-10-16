<?php
  // connection a la base de données jasonDB

  try
{
   $bdd = new PDO('mysql:host=localhost;dbname=jasonDB;charset=utf8','root','root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// inserer des Personnage
  if(isset($_POST['nomPersonnage'])){
      $nomPersonnage = htmlspecialchars($_POST['nomPersonnage']);

      $insertPersonnage = $bdd->prepare("INSERT INTO personnage (nomPersonnage) VALUES (?)");
      $insertPersonnage->execute(array($nomPersonnage));
    }
    $tabLettre = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

?>

<!DOCTYPE html>
<html>
<head>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet">

	<title>Sauver Jason</title>
</head>
<body>

<!-- Header section -->
<header>
  <h1>
    <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    Les Argonautes
  </h1>
</header>

 <!-- Button trigger modal -->
<aside id="buttonAjout">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
    Ajouter un(e) Argonaute &nbsp;&nbsp;&nbsp;+
  </button>
</aside>

<!-- Main section -->
<main>
  <!-- New member form -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter un(e) Argonaute</h5>
          <button type="button" class="close" data-dismiss="modal" name="" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- New member form -->
        <div class="modal-body">
          <form method="POST" action="">
            <div class="form-group">
              <label for="nomPersonnage">Nom de l&apos;Argonaute</label>
              <input type="text" class="form-control" id="nomPersonnage" name="nomPersonnage" placeholder="Charalampos">
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
          </form>
      </div>
    </div>
  </div>
 <!-- navigation -->
<div class="container-fluid">
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <?php foreach ($tabLettre as $key => $value) { ?>
      <li class="page-item"><a class="page-link" href="#<?php echo($value); ?>" id="pagination"><?php echo $value; ?></a></li>
     <?php } ?>
      
    </ul>
  </nav>  
</div>
  

    
  <!-- Member list -->
  <section class="member-list">
  <h1 class="display-1" id="memberEquipage">Membres de l'équipage</h1>
  <div class="container">
  <div class="row">
    
      <?php
        foreach ($tabLettre as $key => $value) {
          $req = $bdd->query("SELECT * FROM personnage WHERE nomPersonnage  LIKE  '".$value."%'");
          $afficherPersonnage = $req->fetch();
        
          if($afficherPersonnage != ""){
          ?>
          <div class=" col-12">
            <div class="d-flex justify-content-start col" id="<?php echo $value; ?>"><span class="premiereLettre"><?php echo $value; ?></span>
            </div>
          </div>
          <?php
           }
       
        $req = $bdd->query("SELECT * FROM personnage WHERE nomPersonnage  LIKE  '".$value."%'");

          while($afficherPersonnage = $req->fetch()){
      ?>
      <div class="col-4">

        <h6 class="display-6 nomPersonnage"><?php if(!empty($afficherPersonnage['nomPersonnage'])){echo $afficherPersonnage['nomPersonnage'];} ?></h6>
      </div>
  

  <?php
        } 
      }
  ?>

</div>
</div>
  </section>
</main>

<footer>
  <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>

</body>
</html>