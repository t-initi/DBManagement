<?php

?>

<form action='action.php' method='post'>
	<fieldset style='color: white;'><legend>Location de Support</legend>
	<table>
				<tr><td>Id_Location</td><td><input type='text' name='id_loc' id='id_loc' /></td></tr>
				<tr><td>Id_Loueur</td><td><input type='text' id='id_loueur' name='id_loueur'/></td></tr>
				<tr><td>Support</td><td><input type='text' id='id_suppL' name='id_suppL'/></td></tr>
				<tr><td>Date Location: </td><td><input type='text' id='date_loc' name='date_loc' /></td></tr>
				<tr><td>Magasin Location: </td><td><input type='text' id='id_magL' name='id_magL'/></td></tr>
				<tr><td>Duree de Location: </td><td>
				<select name='dur'>
					<option value='1'>1</option>
					<option value='3'>3</option>
					<option value='7'>7</option>
				</select>
				</td></tr>
				<tr><td>Clicker OK</td><td><input type='submit' value='OK' id='submitLoc' name='submitLoc'/></td></tr>
	</table>
	
	</fieldset>
</form>