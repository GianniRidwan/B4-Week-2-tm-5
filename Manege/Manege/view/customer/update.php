<?php
	if (isset($customer)) $customer = $customer;
?>
	<h1>Klant wijzigen</h1>
		<form name="update" method="post" action="<?= URL ?>customer/update">
			<input type="hidden" name="id" value="<?= $customer["id"] ?>"/>
			<!--  Bouw hier de rest van je formulier   -->
			<label for="name" class="col-form-label">Naam</label>
			<input type="text" name="name" id="name" value="<?= $customer['name'] ?>">
			<label for="name" class="col-form-label">Adres</label>
			<input type="text" name="adres" id="adres" value="<?= $customer['adres'] ?>">
			<label for="name" class="col-form-label">Telefoonnummer</label>
			<input type="text" name="phone" id="phone" value="<?= $customer['phone'] ?>">
			<input type="submit" value="Klant bijwerken">
		</form>