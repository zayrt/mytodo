<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<form action="" method="post"> 
	<table align="center" style="width: 20%;" class="table table-hover">
		<caption><h1>Test de comptabilité.</h1></caption>
		<tr>
			<tr>
    			<th>Receveur</th>
    			<th>Donneur</th>
  			</tr>
			<td>
				<select class="form-control" name="rh_receveur">
  					<option value="rh+">Rh+</option>
  					<option value="rh-">Rh-</option>
				</select>
			</td>
			<td>
				<select class="form-control" name="rh_donneur">
  					<option value="rh+">Rh+</option>
  					<option value="rh-">Rh-</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<select class="form-control" name="sang_receveur">
  					<option value="O">O</option>
  					<option value="A">A</option>
  					<option value="B">B</option>
  					<option value="AB">AB</option>
				</select>
			</td>
			<td>
				<select class="form-control" name="sang_donneur">
  					<option value="O">O</option>
  					<option value="A">A</option>
  					<option value="B">B</option>
  					<option value="AB">AB</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input class="btn btn-default" type="submit" value="Envoyer">
			<input class="btn btn-default" type="reset" value="Effacer"></td>
		</tr>
	</table>
</form>
<?php
if (isset($_POST['rh_receveur']) && isset($_POST['rh_receveur']) && strcmp($_POST['rh_receveur'], "rh-") == 0 && strcmp($_POST['rh_donneur'], "rh+") == 0)
	{
		echo '<div style="text-align: center;" class="alert alert-danger">'."Les deux rhésus sont incompatible".'</div>';
		return false; 
	}
if (isset($_POST['sang_receveur']) && isset($_POST['sang_donneur']))
	{
		if (strcmp($_POST['sang_receveur'], "O") == 0 && strcmp($_POST['sang_donneur'], "O") != 0) {
			echo '<div style="text-align: center;" class="alert alert-danger">'."Les deux groupes sanguins sont incompatible".'</div>';
			return false;
		}
		if (strcmp($_POST['sang_receveur'], "A") == 0 && (strcmp($_POST['sang_donneur'], "B") == 0 || strcmp($_POST['sang_donneur'], "AB") == 0)) {
			echo '<div style="text-align: center;" class="alert alert-danger">'."Les deux groupes sanguins sont incompatible".'</div>';
			return false;
		}
		if (strcmp($_POST['sang_receveur'], "B") == 0 && (strcmp($_POST['sang_donneur'], "A") == 0 || strcmp($_POST['sang_donneur'], "AB") == 0)) {
			echo '<div style="text-align: center;" class="alert alert-danger">'."Les deux groupes sanguins sont incompatible".'</div>';
			return false;
		}
		echo '<div style="text-align: center;" class="alert alert-info">' . "Les deux groupes sanguins sont compatible".'</div>';
	}
?>