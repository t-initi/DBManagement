<?xml version="1.0" encoding="UTF-8"?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title></title>
</head>
<body>

<?php

include('./connecti.php');
//Connection a la BD
$cn = connect_i();
if(isset($_POST['submitLoc'])){
	
	/*
	* Recuperation des champs du formulaire
	*/
	$idloc = $_POST['id_loc'];
	$idloueur = $_POST['id_loueur'];
	$idsup = $_POST['id_suppL'];
	$dateloc = $_POST['date_loc'];
	$magloc = $_POST['id_magL'];
	$dur = $_POST['dur'];
	
	//Verification des valeurs recuperees
	if(empty($idloc) || empty($idloueur) || empty($idsup) || empty($dateloc) || empty($magloc) || empty($dur) ) {
			echo "<p>Vous devez remplir les 5 champs. <a href='index.php'>Retour a la page d'accueil</a></p>";
			
			
	}else{
		$query = "INSERT INTO location(id_location, id_loueur,id_support,date_loc,mag_loc,duree)
		VALUES ('".$idloc."', '".$idloueur."', '".$idsup."','".$dateloc."','".$magloc."',".$dur.")";
		$res = $cn->query($query) or die(mysql_error());
		
		$query2 = "DELETE FROM en_magasin where id_supp = '".$idsup."'";
		$res2 = $cn->query($query2) or die(mysql_error());
		
		$query3= "UPDATE support SET global_loc = global_loc + 1 WHERE id_supp ='".$idsup."'";
		$res3 = $cn->query($query2) or die(mysql_error());
		
		$queryA= "INSERT INTO exemplaire (id_exemp, id_support) VALUES (NULL,'".$idsup."')";
		$resA = $cn->query($queryA) or die(mysql_error("Erreur query A"));
		
		echo "<p>La location a ete enregistree</p>";
		echo "<p><a href='index.php'>Retour a l'accueil</a></p>";
		echo "<p><a href='tables.php'>Retour aux tables</a></p>";
	}
	
}


if(isset($_POST['submitLocR'])){
	$idsup='';
	$ecart='';
	$period='';
	
	$idlocR = $_POST['id_idlocR'];
	$dateR = $_POST['dateR'];
	$idmagR = $_POST['id_magR'];
	if(empty($idlocR) || empty($dateR) || empty($idmagR)){
		echo "<p>Vous devez remplir les 3 champs. <a href='index.php'>Retour a la page d'accueil</a></p>";
	}else{
		$query = "UPDATE LOCATION SET mag_retour='".$idmagR."', date_retour='".$dateR."' WHERE id_location = '".$idlocR."'";
		$res = $cn->query($query);
		
		$query2 = "SELECT id_support FROM location WHERE id_location = '".$idlocR."'";
		$res2 = $cn->query($query2);
		$tab = null;
		while($tab =mysqli_fetch_assoc($res2)){
		$idsup = $tab['id_support'];
		}
		$query3 = "INSERT INTO en_magasin(id_supp,id_mag) VALUES ('".$idsup."', '".$idmagR."')";
		$res3 = $cn->query($query3);
		
		//Insertion du prix selon le type, et selon la date de retour et la duree
		$query4 = "SELECT type_support FROM support where id_supp='".$idsup."' LIMIT 1";
		$res4 = $cn->query($query4) or die("Erreur de selection du type de support");
		while($tab4= mysqli_fetch_assoc($res4)){
		$type = $tab4['type_support'];
		}
		$price=0;
	
		if($type='DVD'){
				$price=5;		
		}else if($type='VCD'){
				$price=4;		
		}else if($type='Video Cassette'){
				$price=3;		
		}
		//Date retour
		
		$query5 = "SELECT datediff(date_retour,date_loc) AS ecart, duree FROM location WHERE id_location='".$idlocR."' AND id_support='".$idsup."' LIMIT 1";
		$res5 = $cn->query($query5) or die("Erreur de calcul de date_diff");
		while($tab5= mysqli_fetch_assoc($res5)){
		$ecart = $tab5['ecart'];
		$period = $tab5['duree'];
		}
		if($ecart > $period) {
				$plus = $ecart - $period;
				$price = $price + (2 * $plus);	
		}
		$query6= "UPDATE location SET prix= ".$price." WHERE id_location = '".$idlocR."'";
		$res6 = $cn->query($query6) or die("Erreur de mise a jour du prix");
		
		echo "<p>La Restitution c'est bien passee</p>";
		echo "<p><a href='index.php'>Retour a l'accueil</a></p>";
		echo "<p><a href='tables.php'>Retour aux tables</a></p>";
		
	}

}

/*

$query = "UPDATE LOCATION SET mag_retour='".$idmagR."', date_retour='".$dateR."' WHERE id_location = '".$idlocR."'";
		$res = $cn->query($query);
		
		$query2 = "SELECT id_support FROM location WHERE id_location = '".$idlocR."'";
		$res2 = $cn->query($query2);
		$tab = null;
		while($tab =mysqli_fetch_assoc($res2)){
		$idsup = $tab['id_support'];
		}
		$query3 = "INSERT INTO en_magasin(id_supp,id_mag) VALUES ('".$idsup."', '".$idmagR."')";
		$res3 = $cn->query($query3);
		
		echo "<p>La Restitution c'est bien passee</p>";
		echo "<p><a href='index.php'>Retour a l'accueil</a></p>";
		echo "<p><a href='tables.php'>Retour aux tables</a></p>";
		
	*/

?>
</body>
</html>