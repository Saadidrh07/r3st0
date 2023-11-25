<?php
include_once "bd.pdo.php";

function getCritiquerByIdR($idR){
    try{
        $connex=connexionPDO();
        $prep=$connex->prepare("SELECT * FROM critiquer WHERE idR=?" );
        $prep->bindValue(1,$idR);
        $prep->execute();
        $resultat=$prep->fetchAll(PDO::FETCH_OBJ);
        return $resultat; 
    }
    catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
}


?>