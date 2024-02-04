@extends('layouts.main')

@section('title', 'Aula Laravel')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-cointainer" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/images/event_placeholder.jpg" alt="{{ $event->title}}">
            <p class="card-date">03/02/2024</p>
            <h5 class="card-title">{{ $event->title }}</h5>
            <p class="card-participants">X participantes</p>
            <a href="" class="btn btn-primary">Saber mais</a>
        </div>
        @endforeach
    </div>
</div>
@endsection