<?php 

   $laposition=getLesTypesCuisinebyIdR($unResto->idR);

?><h1><?php 

       echo" $unResto->nomR";

?> </h1>
<span id="note">
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<img class='note' src='images/like.png' alt=''>";
    }
    ?>
</span>

<section>
    <h3>Type de cuisine</h3>
    <ul id="tagFood">

        <?php foreach($laposition as $lapo ){  
            echo"<li class='tag'>  <span class='tag'># $lapo->libelleTC <br> </li>";} 
            ?></span>

    </ul>
</section>
<section>
    <h3>Description</h3>
    <?php
       echo" $unResto->descR";

?>
</section>

<h2 id="adresse">
    Adresse

</h2><?php
       echo" $unResto->voieAdrR <br> $unResto->cpR $unResto->villeR";

?>
<p>
</p>

<h2 id="photos">
    Photos </h2>
<?php foreach($LesPhoto as $photo ){ echo" <img src='photos/$photo->cheminP'>  ";}  ?>



<ul id="galerie">
    <li><img class="galerie" src="" alt="" /></li>
</ul>

<h2 id="horaires">
    Horaires
</h2>
<p>
    <?php
       echo" $unResto->horairesR";

?>
</p>

<h2 id="crit">Critiques</h2>
<ul id="critiques">
    <li>
        <?php
foreach($lesCritique as $unCritique ){
        echo" $unCritique->mailU ";

        ?></li>
    <li>
        <?php
       echo" $unCritique->commentaire ";
}
?></li>

</ul>
<?php 
        
  

?>