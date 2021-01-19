@extends('layouts.app')

@section('content')

<div class="container">
    <h1>{{$testo}}</h1>
    <div class="nomi_tabella">
        <ul>
            <li>target</li>
            <li>categoria</li>
            <li>colore</li>
            <li>taglia</li>
            <li>tessuto</li>
            <li>lunghezza manica</li>
            <li>prezzo</li>
            <li>tipo di motivo</li>
            <li>scollatura</li>
        </ul>
    </div>

    <div class="db-dress">
        <ul>
            @foreach ($dresses as $dress)
            <li>
                <p>{{$dress->target}}</p>
                <p>{{$dress->categoria}}</p>
                <p>{{$dress->colore}}</p>
                <p>{{$dress->taglia}}</p>
                <p>{{$dress->tessuto}}</p>
                <p>{{$dress->lunghezza_manica}}</p>
                <p>{{$dress->prezzo}}€</p>
                <p>{{$dress->tipo_di_motivo}}</p>
                <p>{{$dress->scollatura}}</p>
            </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection
