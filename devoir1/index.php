<?php
$prenom = 'Prenom';
$nom = 'Nom';

$prenomNom = "$prenom $nom";
$email = strtolower($prenom . '.' . $nom . '@email.com');
?>
<!DOCTYPE html> 
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curriculum Vitae - <?php echo $prenomNom; ?></title>
</head>
<body>
  <h1>Curriculum Vitae</h1>
  <h2><?php echo $prenomNom; ?></h2>

  <img src="assets/img/thomas.jpeg" alt="<?php echo $prenomNom; ?>">

  <h3>Informations Personnelles</h3>
  <ul>
    <li><strong>Nom :</strong> <?php echo $prenom; ?></li>
    <li><strong>Prénom :</strong> <?php echo $nom; ?></li>
    <li><strong>Date de Naissance :</strong> 27 novembre 1991 (<?php echo date("Y") - 1991 ?> ans)</li>
    <li><address><strong>Adresse :</strong> 456, Avenue Virtuelle, 1000 Bruxelles, Belgique</address></li>
    <li><strong>Téléphone :</strong> <a href="tel:+32 2 34 56 78">+32 2 34 56 78</a></li>
    <li><strong>Email :</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
  </ul>
  
  <?php require "formations.php"; ?>

  <?php require "skills.php"; ?>
  
  <?php require "Langues.php"; ?>

  <?php require "experiences.php"; ?>

  <?php require "Interets.php"; ?>
  
  
  
</body>

</html>
