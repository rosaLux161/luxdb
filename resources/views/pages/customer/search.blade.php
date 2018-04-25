@extends('layouts.main')

@section('content')
    <h1>Kundensuche</h1>

    <form method="POST" action ="/customers/search">
            {{csrf_field()}}
            <div class="form-group">
                <label for="lastname">Nachname</label>
                <input type="text" name="lastname">
            </div>
            <button type="submit" class="btn btn-primary">Suchen</button>
    </form>
    <h2>Ergebnisse:</h2>
    
    
    @isset($customers)
    <ul class="list-group">

            @foreach($customers as $customer)
        <li class="list-group-item"><a href="/customers/{{$customer->id}}">{{$customer->lastname}}, {{$customer->firstname}}</a></li>
    @endforeach

    </ul>
    @endisset

    
    <p>(c) Jan Lützler, 2018<p>
@endsection