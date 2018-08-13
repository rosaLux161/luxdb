@extends('layouts.main')
@section('content')
<h1>Neuen Kunden anlegen
</h1>
<form method="POST" action ="/customers">
  {{csrf_field()}}
  <div class="form-row">
    <div class="col">
      <div class="form-group">
        <label for="lastname">Nachname
        </label>
        <input type="text" class="form-control" name="lastname">
      </div>
      <div class="form-group">
        <label for="firstname">Vorname
        </label>
        <input type="text" class="form-control" name="firstname">
      </div>
      <div class="form-group">
        <label for="company">Firma
        </label>
        <input type="text" class="form-control" name="company">
      </div>
      <div class="form-group">
        <label for="phonenumber">Telefonnumer
        </label>
        <input type="text" class="form-control" name="phonenumber">
      </div>
      <div class="form-group">
        <label for="email">E-Mail
        </label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="form-group">
        <label for="officialid">Kundennummer
        </label>
        <input type="text" class="form-control" name="officialid">
      </div>
    </div>
    <div class="col">
      <div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="street">Straße
            </label>
            <input type="text" class="form-control" name="street">
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="housenumber">H.-Nr.
            </label>
            <input type="text" class="form-control" name="housenumber">
          </div>
        </div>
		</div>
		<div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="zip">PLZ
            </label>
            <input type="text" class="form-control" name="zip">
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="city">Ort
            </label>
            <input type="text" class="form-control" name="city">
          </div>
        </div>
		</div>	

		
		
      </div>
    </div>
	



  <button type="submit" class="btn btn-primary">Speichern
  </button>
</form>
<p>(c) Jan Lützler, 2018
</p>
@endsection
