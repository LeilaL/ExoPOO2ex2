<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 2 POO PHP </title>
  </head>
  <body>


<form class="" action="index.php" method="post">
  <fieldset>
    <input type="text" name="nom" value="Nom" maxlength="15"> <br>
    <br>
    <input type="number" name="age" placeholder="Age" min="0" max="30" value="0<Age>30"> <br>
    <br>
    <!-- <input type="text" name="sexe" value="F ou M"> -->
    <input type="radio" name="sexe" value="male"> Male<br>
 <input type="radio" name="sexe" value="female"> Female<br>
    <br>
    <!-- <input type="text" name="couleur" value="Couleur"><br> -->
    <label for="couleurs">Couleur :</label>
    <select name="couleur">
      <option value="noir">noir</option>
      <option value="gris">gris</option>
      <option value="blanc">blanc</option>
      <option value="roux">roux</option>
      <option value="brun">brun</option>
    </select> <br>
<br>
    <input type="submit" name="envoyer" value="OK">
  </fieldset>
</form>

<?php  foreach ($chats as $chat) {
?>

<div>
  <h1>Chat N° <?php echo $chat->getId()?></h1>
  <p><?php echo $chat->getNom()?></p><br>
  <br>
  <p><?php echo $chat->getAge()?></p><br>
  <br>
  <p><?php echo $chat->getSexe()?></p><br>
  <br>
  <p><?php echo $chat->getCouleur()?></p>
</div>

<?php } ?>

  </body>
</html>
