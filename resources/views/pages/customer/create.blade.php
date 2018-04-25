@extends('layouts.main')

@section('content')
    <h1>Neuen Kunden anlegen</h1>

    <form method="POST" action ="/customers">
            {{csrf_field()}}
            <div class="form-group">
                <label for="lastname">Nachname</label>
                <input type="text" name="lastname">
            </div>
            <div class="form-group">
                <label for="firstname">Vorname</label>
                <input type="text" name="firstname">
            </div>
            <div class="form-group">
                <label for="company">Firma</label>
                <input type="text" name="company">
            </div>
            <div class="form-group">
                <label for="telephonenumber">Telefonnummer</label>
                <input type="text" name="telephonenumber">
            </div>
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label for="officialid">Kundennummer</label>
                <input type="text" name="officialid">
            </div>
            <button type="submit" class="btn btn-primary">Speichern</button>
    </form>

    <p>(c) Jan Lützler, 2018<p>
@endsection