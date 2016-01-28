<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="iso-8859-1" lang="fr">
<?php
include('./functions.php');
include('connect.php');

?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>BDD</title>
<link type='text/css' rel='stylesheet' href='css/style.css'/>
</head>
<!-- BEGINING OF THE PAGE -->
<body>
	<div id="mainDiv">
		<div id="pageTitle">
			<h1>Projet De Base De Donnees</h1>
			<form action='#' method='get'>
				<fieldset>
					<input type='text' id='code' name='code' />
					<input type='submit' id='search' name='search' value='Search' />
				</fieldset>

			</form>
		</div>
		
		<div id="pageMenu">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="tables.php">Table</a></li>
			<li><a href="#">Requetes</a></li>
		</ul>
		</div>
		
		<div id="contents">
			<div id="leftdiv">
				<h2 class='titleA' >Insertion d'une Location</h2>
				<?php include('./locationformulaire.php');
				//echo filmTab();
				?>
			
			</div>
		
			<div id="rightdiv">
			<h2 class='titleA' >Retour d'une Location</h2>
			<?php include('./depotformulaire.php');?>
				
			</div>
			
			<div id="bttdiv"  style='background: color;' >
			<h2 class='titleA'>test</h2>
			<?php 
					if(isset($_GET['search'])){
						if(!empty($_GET['code'])){
							$code = $_GET['code'];
							
							select_from_table($code);
						}
					}

			?>
				
			</div>
			<div id='bottomDiv'></div>
			
			
			
		</div>
	
	</div>

</body>
</html>