@extends('layouts.main')

@section('title', 'Aula Laravel')

@section('content')
<h1>Olá, Mundo!</h1>
@if($nome == "Enzo")
<p>Olá, {{ $nome }}!</p>
@else
<p>Não reconhecido</p>
@endif

<a href="/teste">Teste</a>
@endsection