@extends('layouts.app')
@section('title', 'Pagina contatti')
@section('content')
  <h2>Contatti</h2>
  <h3>potete trovarci al numero:</h3>
  <p>{{ $tel }}</p>
  <h3>oppure scriverci una email a:</h3>
  <p>{{ $email }}</p>
@endsection
