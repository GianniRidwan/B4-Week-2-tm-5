<h1>Voeg een paard toe</h1>
<form name="create" method="post" action="store">
	<!-- bouw hier je formulier -->
	<label for="name" class="col-form-label">Naam</label>
    <input type="text" name="name" id="horsename" class="form-control">
    <label for="age" class="col-form-label">Ras</label>
    <input type="text" name="breed" id="breed" class="form-control">
    <label for="age" class="col-form-label">Leeftijd</label>
    <input type="text" name="age" id="age" class="form-control">
    <label for="age" class="col-form-label">Hoogte</label>
    <input type="text" name="height" id="height" class="form-control">
    <input type="submit" class="btn btn-success form-control mt-2" value="Toevoegen">
</form>