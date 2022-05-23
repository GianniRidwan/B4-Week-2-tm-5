<?php
	if (isset($reservation)) $reservation = $reservation;
?>
	<h1>Reservering wijzigen</h1>
		<form name="update" method="post" action="<?= URL ?>reservation/update">
			<input type="hidden" name="id" value="<?= $reservation["id"] ?>"/>
			<!--  Bouw hier de rest van je formulier   -->
			<label for="name" class="col-form-label">Naam</label>
			<input type="text" name="name" id="name" value="<?= $reservation['name'] ?>">
			<label for="age" class="col-form-label">Leeftijd</label>
			<input type="text" name="age" id="age" value="<?= $reservation['age'] ?>">
			<input type="submit" value="Persoon bijwerken">
		</form>