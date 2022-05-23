<h1>Voeg een klant toe</h1>
<form name="create" method="post" action="store">
	<!-- bouw hier je formulier -->
	<label for="customerName" class="col-form-label">Naam</label>
    <input type="text" name="customerName" id="customerName" class="form-control">
    <label for="adres" class="col-form-label">Adres</label>
    <input type="text" name="adres" id="adres" class="form-control">
    <label for="phone" class="col-form-label">Telefoonnummer</label>
    <input type="text" name="phone" id="phone" class="form-control">
    <input type="submit" class="btn btn-success form-control mt-2" value="Toevoegen">
</form>