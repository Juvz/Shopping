@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h2>Products</h2>

<div class="row">

    @foreach($allProducts as $product)

<div class="col-4">
    <div class="card">
<img class="card-img-top" src="{{ asset('Untitled.png') }}" alt="Card image cap">
    <div class="card-body">
        <h4 class="card-title">{{$product->name}}</h4>
        <h4 class="card-title">{{$product->description}}</h4>
        <h3>₱{{ $product->price}}</h3>
        <p class="card-text">Text</p>
    </div>
    <div class="card-body">
        <a href="{{ route('cart.add', $product->id) }}" class="card-link">Add to cart</a>
    </div>
</div>
</div>
    @endforeach
    </div>
</div>
@endsection
