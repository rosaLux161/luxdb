@extends('layouts.main')

@section('content')
    <h1>Kundenansicht</h1>
    <p>Nachname: {{$lastname}}</p>
        <p>Vorname: {{$firstname}}</p>
            <p>Firma: {{$company}}</p>
                <p>Telefonnummer: {{$phonenumber}}</p>
                    <p>E-Mail: {{$email}}</p>
                        <p>Kundennummer: {{$officialid}}</p>
@endsection