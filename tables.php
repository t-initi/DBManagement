<!DOCTYPE html>
<?php
error_reporting(0);
include('./functions.php');

?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<title>BDD</title>
<link type='text/css' rel='stylesheet' href='css/style.css'/>
</head>
<!-- BEGINING OF THE PAGE -->
<body>
<?php
	include('connect.php');
?>
	<div id="mainDiv">
		<div id="pageTitle">
			<h1>Projet De Base De Donnees</h1>
		</div>
		
		<div id="pageMenu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Table</a></li>
			<li><a href="#">Requêtes</a></li>
		</ul>
		</div>
		
		<div id="contents">
			<div style='overflow: scroll;' id="leftdiv">
				<h2 class='titleA' >Table des films</h2>
				<?php echo filmTab(); ?>
				
			</div>
		
			<div style='overflow: scroll;' id="rightdiv">
			<h2 class='titleA' >Supportts En Magasin</h2>
			<?php echo EnMagasinTab(); ?>
			
				
			</div>
			
			<div style='overflow: scroll;' id="viddiv">
			<h2 class='titleA' >Table Des Locations</h2>
			<?php echo LocationTab(); ?>
				
			</div>
			
			<div style='overflow: scroll;' id="viddiv">
			<h2 class='titleA' >Table Des Magasins</h2>
			<?php echo MagasinTab(); ?>
				
			</div>
			
			<div style='overflow: scroll;' id="viddiv">
			<h2 class='titleA' >Table Des Support</h2>
			<?php echo SupportTab(); ?>
				
			</div>
			
			<div style='overflow: scroll;' id="viddiv">
			<h2 class='titleA' >Table Des Clients</h2>
			<?php echo ClienTab(); ?>
				
			</div>
			
			<div style='overflow: scroll;' id="viddiv">
			<h2 class='titleA' >Table Des Employes</h2>
			<?php echo EmployeTab(); ?>
				
			</div>
		</div>
	
	</div>

</body>
</html>