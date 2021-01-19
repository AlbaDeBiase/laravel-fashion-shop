@extends('layouts.app')

@section('content')
<h1>{{$testo}}</h1>
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
            <p>{{$dress->prezzo}}</p>
            <p>{{$dress->tipo_di_motivo}}</p>
            <p>{{$dress->scollatura}}</p>
        </li>
        @endforeach
    </ul>
</div>
@endsection
