<?php
	if (isset($employee)) $employee = $employee;
?>
	<h1>Persoon wijzigen</h1>
		<form name="update" method="post" action="<?= URL ?>employee/update">
			<input type="hidden" name="id" value="<?= $employee["id"] ?>"/>
			<!--  Bouw hier de rest van je formulier   -->
			<label for="name" class="col-form-label">Naam</label>
			<input type="text" name="name" id="name" value="<?= $employee['name'] ?>">
			<label for="age" class="col-form-label">Leeftijd</label>
			<input type="text" name="age" id="age" value="<?= $employee['age'] ?>">
			<input type="submit" value="Persoon bijwerken">
		</form>