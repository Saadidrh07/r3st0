<?php
include_once "bd.pdo.php";

function getLesTypesCuisinebyIdR($idR){
    try{
        $connex=connexionPDO();
        $prep=$connex->prepare("SELECT * FROM resto r inner join proposer p on r.idR=p.idR inner join typecuisine  t on t.idTC=p.idTC WHERE r.idR=?" );
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
function getLesTypesCuisineby(){
    try{
        $connex=connexionPDO();
        $prep=$connex->prepare("SELECT * FROM typecuisine" );
      
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