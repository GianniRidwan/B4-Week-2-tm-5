<?php
	if (isset($horse)) $horse = $horse;
?>
	<h1>Paard wijzigen</h1>
		<form name="update" method="post" action="<?= URL ?>horse/update">
			<input type="hidden" name="id" value="<?= $horse["id"] ?>"/>
			<!--  Bouw hier de rest van je formulier   -->
			<label for="name" class="col-form-label">Naam</label>
			<input type="text" name="horsename" id="horsename" value="<?= $horse['horsename'] ?>">
			<label for="breed" class="col-form-label">Ras</label>
			<input type="text" name="breed" id="breed" value="<?= $horse['breed'] ?>">
			<label for="age" class="col-form-label">Leeftijd</label>
			<input type="text" name="age" id="age" value="<?= $horse['age'] ?>">
			<label for="height" class="col-form-label">Hoogte</label>
			<input type="text" name="height" id="height" value="<?= $horse['height'] ?>">
			<input type="submit" value="Paard bijwerken">
		</form>