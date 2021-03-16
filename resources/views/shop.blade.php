@extends('layouts.app')
@section('title', 'Pagina ecommerce')
@section('content')
  <h2>Shop</h2>
  <ul>
    @foreach ($items as $item)
      <li>
        <h3>{{ $item->article }}</h3>
        <ul>
          <li>
            <h4>Genre: {{ $item->genre }}</h4>
          </li>
          <li>
            <h4>Quantity: {{ $item->quantity }}</h4>
          </li>
          <li>
            <h4>#id: {{ $item->id }}</h4>
          </li>
        </ul>
      </li>
    @endforeach
  </ul>
@endsection
