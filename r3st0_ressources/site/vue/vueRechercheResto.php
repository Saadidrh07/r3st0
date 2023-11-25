<h1>Recherche d'un restaurant</h1>

<form action="./?action=recherche&critere=<?= $critere ?>" method="POST">
    <?php 
  $CUI=getLesTypesCuisineby();
   switch ($critere){
      case "nom":
         echo "Recherche par nom :<br>";
         echo "<input type='text' name='nom' placeholder='nom'> <br>";
         break;
      case "adresse":
         echo "Recherche par adresse :<br>";
         echo "<input type='text' name='ville' plceholder='ville'> <br>";
         echo "<input type='text' name='cp' placeholder='Code postal'> <br>";
         echo "<input type='text' name='voie' placeholder='rue'> <br>";
         break;
      case "type":
         echo "Recherche par type de cuisine :";
         echo "Selctionner un ou plusieurs types de cuisine <br>";

        foreach($CUI as $cuisine ){  
            echo "<input type='checkbox'  value='$cuisine->idTC'>$cuisine->libelleTC<br>";} 
            

    break;
    }
    ?>
    <input type="submit" name="Rechercher" value="Rechercher" />
</form>