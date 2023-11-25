<h1>Liste des restaurants</h1>
<?php 
foreach($lesresto as $unResto){
  $unePhoto=getLesphotoByIdR($unResto->idR);
  $laposition=getLesTypesCuisinebyIdR($unResto->idR);
  

?>
<div class="card">
    <div class="photoCard">
        <?php
       echo" <img src='photos/$unePhoto->cheminP'>";

?>
    </div>
    <?php 
echo "<a href='?action=detail&resto=$unResto->idR'>$unResto->nomR</a> <br/>";
echo" $unResto->numAdrR  $unResto->voieAdrR<br/>";
echo" $unResto->cpR  $unResto->villeR<br/>";


?>
    <div class="tagCard">
        <ul id="tagFood">
            <li class="tag">
                <?php foreach($laposition as $lapo ){  echo"  <span ' class='tag'># $lapo->libelleTC <br> ";} ?></span>
            </li>
        </ul>
    </div>
</div>
<?php 

}
?>