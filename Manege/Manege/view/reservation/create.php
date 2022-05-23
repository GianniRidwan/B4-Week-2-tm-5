<h1>Reserveringen</h1>
<form name="create" method="post" action="store">
	<!-- bouw hier je formulier -->
	<label for="customerName" class="col-form-label">Klant naam</label>
    <input type="text" name="customerName" id="customerName" class="form-control">
    <label for="horsename" class="col-form-label">Paard naam</label>
    <input type="text" name="horsename" id="horsename" class="form-control">
    <label for="starttime" class="col-form-label">Starttijd</label>
    <input type="time" name="starttime" id="starttime" class="form-control">
    <label for="ride" class="col-form-label">Aantal ritten (60 minuten per rit)</label>
    <input type="number" name="ride" id="ride" class="form-control">
    <input type="submit" class="btn btn-success form-control mt-2" value="Toevoegen">
</form>