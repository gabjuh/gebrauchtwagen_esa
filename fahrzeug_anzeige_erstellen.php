<?php 

require_once 'header.php';


?>


<h4>Angaben für die Anzeige</h4>

<form action="anzeige_speichern.php" class="form mt-5" method="post">

  <div class="mb-3 row">
    <label class="col-sm-3 col-form-label" for="mark">Automark *</label>
    <div class="col-sm-9">
      <select class="form-select" name="mark" id="mark" required>
        <option value="" hidden>Bitte wählen</option>
        <option value="Audi" selected>Audi</option>
        <option value="honda">Honda</option>
      </select>
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-3 col-form-label" for="modell">Modell *</label>
    <div class="col-sm-9">
      <input class="form-control" type="text" name="modell" id="modell" placeholder="Modell angeben" value="A4" required>
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-3 col-form-label" for="color" id="color">Farbe</label>
    <div class="col-sm-9">
      <input class="form-control" type="text" name="color" placeholder="Farbe angeben" value="Gray">
    </div>
  </div>

  <div class="mb-3 row">
  <label for="mileage" class="col-sm-3 col-form-label">Gefahren *</label>
    <div class="col-sm-9">
      <input class="form-control" type="number" min="0" step="1000" name="mileage" id="mileage" placeholder="Gefahrene Kilomenter angeben" value="125000" required>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="price" class="col-sm-3 col-form-label">Preis *</label>
    <div class="col-sm-9">
      <input class="form-control" type="number" min="0" step="0.01" name="price" id="price" placeholder="Preis angeben" value="12000" required>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="transmission" class="col-sm-3 col-form-label">Gangschaltung *</label>
    <div class="col-sm-9">
    <select name="transmission" id="transmission" class="form-select" required>
      <option value="" hidden>Bitte wählen</option>
      <option value="automatik">Automatik</option>
      <option value="manuell" selected>Manuell</option>
    </select> 
    </div>
  </div>

  <div class="mb-3 row">
    <label for="tankVolume" class="col-sm-3 col-form-label">Tankgröße (Liter) *</label>
    <div class="col-sm-9">
      <input class="form-control" type="number" min="0" name="tankVolume" id="tankVolume" placeholder="Tankgröße in Liter angeben" value="75" required>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="consumption" class="col-sm-3 col-form-label">Verbrauch (L/100km)*</label>
    <div class="col-sm-9">
      <input class="form-control" type="number" min="0" step="0.1" name="consumption" id="consumption" placeholder="Verbrauchsdurchschnitt angeben" value="8.5" required>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="images" class="col-sm-3 col-form-label">Bilder hochladen</label>
    <div class="col-sm-9">
      <input type="file" name="images" class="form-control" accept=".png, .jpg, .jpeg" multiple>
    </div>
  </div>
  
  <!-- 
    select - auto type
    modell
    color
    mileage
    price
    transmission
    tankVolume
    comsumption
    bild?
   -->
   <input class="btn btn-primary d-block mt-5 mx-auto" type="submit" value="Speichern">
</form>



<?php 

require_once 'footer.php';

?>