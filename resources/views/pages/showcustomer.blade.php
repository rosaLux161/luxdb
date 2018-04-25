@extends('layouts.main')

@section('content')
    <h1>Kundenansicht</h1>
    Nachname: {{$lastname}}
    Vorname: {{$firstname}}
    Firma: {{$company}}
    Telefonnummer: {{$phonenumber}}
    E-Mail: {{$email}}
    Kundennummer: {{$officialid}}
@endsection