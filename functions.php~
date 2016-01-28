<?php
include('./connecti.php');


function connect_to_db(){
	//This should be a file to required
	//error~_report(0);
	$c = new mysqli('localhost','root','','societe');
	if($c->connect_errno){}

}

function select_from_table($query){
	
	$con = mysql_connect('localhost','root','') ;
	$d = mysql_select_db("societe");
	
	$res = mysql_query($query) or die(mysql_error());
	
	if($res > 0){
		echo "good";
		$table = "<table border='1' ><tr>";
		$rows = mysql_num_rows($res);
		$fields = mysql_num_fields($res);
		
		for($i=0;$i<$fields;$i++){
			echo mysql_field_name($res,$i);
			$table .= "<th border=1 >".mysql_field_name($res,$i)."</th>";
		}
		$table .="</tr>";
		
		while($tab = mysql_fetch_array($res)){
			$table .="<tr>";
			for($j=0;$j<$fields;$j++){
				$table .= "<th>".$tab[$j]."</th>";
			}
			$table .="</tr>";
		}
			$table .="</table>";
			echo $table;
			
		
	}else{
		echo "bad";	
	}
	

}

function select_from_table2($query){
	
	$con = new mysqli('localhost','root','',"societe") ;
	
	if($res = $con->query($query)){
	
	if($res->num_rows > 0){
		echo "good";
		$table = "<table border='1' ><tr>";
		$rows = $res->num_rows;
		$fields = mysql_num_fields($res);
		
		for($i=0;$i<$fields;$i++){
			echo mysql_field_name($res,$i);
			$table .= "<th>".mysql_field_name($res,$i)."</th>";
		}
		$table .="</tr>";
		
		while($tab = mysql_fetch_array($res)){
			$table .="<tr>";
			for($j=0;$j<$fields;$j++){
				$table .= "<th>".$tab[$j]."</th>";
			}
			$table .="</tr>";
		}
			$table .="</table>";
			echo $table;
			
		
	}else{
		echo "requete vide";	
	}
	}else{
		echo "bad";	
	}
	

}

function filmTab(){
	$connect = connect_i();
		$filmTab= "";
		$query = "SELECT * from film";
		$sql = $connect->query($query);
		//print_r($sql);
		$filmTab .= "<table id= 'filmTab' style ='color: white;'><tr><th>Id Film</th><th>Metteur en scene</th><th>Acteurs</th><th>Annee sortie</th><th>Date_Achat</th><th>Categorie</th></tr>";
		while( $films = mysqli_fetch_assoc($sql)){
			$id = $films['id_film'];
			$mes = $films['metteur_en_scene'];
			$acteurs = $films['acteur'];
			$annee = $films['annee_sortie'];
			$date_acht = $films['date_achat'];
			$cat = $films['category'];
				
		$filmTab .="<tr><td>".$id."</td><td>".$mes."</td><td>".$acteurs."</td><td>".$annee."</td><td>$date_acht</td><td>".$cat."</td></tr>";
		}
		$filmTab .="</table>";
		return $filmTab;
	}
	
	function EnMagasinTab(){
	$connect = mysqli_connect('localhost','root','','societe');
		$EnMagTab= "";
		$query = "SELECT * from en_magasin";
		$sql = mysqli_query($connect,$query);
		$EnMagTab .= "<table style ='color: white;' ><tr><th>Id Support</th><th>Id Magasin</th></tr>";
		while( $tab = mysqli_fetch_assoc($sql)){
			$idsup = $tab['id_supp'];
			$idmag = $tab['id_mag'];
		$EnMagTab .="<tr><td>".$idsup."</td><td>".$idmag."</td></tr>";
		}
		$EnMagTab .="</table>";
		return $EnMagTab;
	}
	
	function LocationTab(){
	$connect = mysqli_connect('localhost','root','','societe');
		$locTab= "";
		$query = "SELECT id_location, id_loueur,id_support,date_loc,mag_loc,date_retour,mag_retour,prix,duree from location";
		$sql = mysqli_query($connect,$query);
		$locTab .= "<table style ='color: white;' ><tr><th>Id Location</th><th>Loueur</th><th>Support</th><th>Date_Location</th>
		<th>Magasin Location</th><th>Date_Retour</th><th>Magasin Retour</th><th>Prix</th><th>Duree</th></tr>";
		while( $tab = mysqli_fetch_assoc($sql)){
			$id = $tab['id_location'];
			$loueur = $tab['id_loueur'];
			$supp = $tab['id_support'];
			$date_loc = $tab['date_loc'];
			$mag_loc = $tab['mag_loc'];
			$date_retour = $tab['date_retour'];
			$mag_retour = $tab['mag_retour'];
			$d = $tab['duree'];
			$p = $tab['prix'];
		$locTab .="<tr><td>".$id."</td><td>".$loueur."</td><td>".$supp."</td><td>".$date_loc."</td><td>".$mag_loc."</td>
		<td>".$date_retour."</td><td>".$mag_retour."</td><td>".$p."</td><td>".$d."</td></tr>";
		}
		$locTab .="</table>";
		return $locTab;
	}
	
	function MagasinTab(){
	$connect = mysqli_connect('localhost','root','','societe');
		$locTab= "";
		$query = "SELECT * from magasin";
		$sql = mysqli_query($connect,$query);
		$locTab .= "<table style ='color: white;' ><tr><th>Id Magasin</th><th>Nom</th><th>Addresse</th><th>Zone</th>
		<th>Resp_Mag</th><th>Mecanicien</th></tr>";
		while( $tab = mysqli_fetch_assoc($sql)){
			$id = $tab['Id_mag'];
			$nom = $tab['Nom_mag'];
			$adr = $tab['Adr_mag'];
			$zone = $tab['Zone'];
			$resp_mag = $tab['Resp_mag'];
			$mec = $tab['Mecanicien'];
			
		$locTab .="<tr><td>".$id."</td><td>".$nom."</td><td>".$adr."</td><td>".$zone."</td><td>".$resp_mag."</td>
		<td>".$mec."</td></tr>";
		}
		$locTab .="</table>";
		return $locTab;
	}
	
	function ClienTab(){
	$connect = mysqli_connect('localhost','root','','societe');
		$locTab= "";
		$query = "SELECT * from clientinfo";
		$res = $connect->query($query);
	
		$locTab .= "<table style ='color: white;' ><tr><th>Num Client</th><th>Nom</th><th>Addresse</th></tr>";
		while( $tab =mysqli_fetch_assoc($res)){
			$num = $tab['num_client'];
			$nom = $tab['nom_client'];
			$adr = $tab['adr_client'];
		$locTab .="<tr><td>".$num."</td><td>".$nom."</td><td>".$adr."</td></tr>";
		}
		$locTab .="</table>";
		return $locTab;
	}
	
	
	function SupportTab(){
	$connect = mysqli_connect('localhost','root','','societe');
		$locTab= "";
		$query = "SELECT * from support";
		$sql = mysqli_query($connect,$query);
		$locTab .= "<table style ='color: white;' ><tr><th>Id Support</th><th>Id Film</th><th>Type_support</th>
		<th>Global_Loc</th><th>Langue</th><th>ss_titre</th><th>stereo</th></tr>";
		while( $tab = mysqli_fetch_assoc($sql)){
			$ids = $tab['id_supp'];
			$idf = $tab['id_film'];
			$type= $tab['type_support'];
			$glob = $tab['global_loc'];
			$lang = $tab['langue'];
			$st = $tab['ss_titre'];
			$stereo = $tab['stereo'];
			
		$locTab .="<tr><td>".$ids."</td><td>".$idf."</td><td>".$type."</td><td>".$glob."</td><td>".$lang."</td>
		<td>".$st."</td><td>".$stereo."</td></tr>";
		}
		$locTab .="</table>";
		return $locTab;
	}
	
	function EmployeTab(){
	$connect = mysqli_connect('localhost','root','','societe');
		$locTab= "";
		$query = "SELECT Num_emp, Nom_emp, Adr_emp, Date_emb, Type_emp, Lieu from employe";
		$res = $connect->query($query);
	
		$locTab .= "<table style ='color: white;' ><tr><th>Num Employe</th><th>Nom</th><th>Addresse</th><th>Date_Embauche</th><th>Type</th><th>Lieu</th></tr>";
		while( $tab =mysqli_fetch_assoc($res)){
			$num = $tab['Num_emp'];
			$nom = $tab['Nom_emp'];
			$adr = $tab['Adr_emp'];
			$date =$tab['Date_emb'];
			$type =$tab['Type_emp'];
			$lieu = $tab['Lieu'];
		$locTab .="<tr><td>".$num."</td><td>".$nom."</td><td>".$adr."</td><td>".$date."</td><td>".$type."</td><td>".$lieu."</td></tr>";
		}
		$locTab .="</table>";
		return $locTab;
	}
	
	function MiseAJour(){
	
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
		$query6= "UPDATE LOCATION SET prix= ".$price." WHERE id_location = '".$idlocR."'";
		$res6 = $cn->query($query6) or die("Erreur de mise a jour du prix");
			
	}

?>