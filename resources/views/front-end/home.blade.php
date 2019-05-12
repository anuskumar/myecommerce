@extends('layouts.front-end')

@section('content')

@include('inc._carousel')






<div class="row">

        @foreach ($products as $product)
    <div class="col-lg-4 col-md-6 mb-4">



      <div class="card h-100">
        <a href="{{ route('product.show', $product->slug) }}">
            <img class="card-img-top" src="http://placehold.it/700x400" alt="">
        </a>

        <div class="card-body">
          <h4 class="card-title">
            <a href="{{ route('product.show', $product->slug) }}">
               {{ $product->name }}
            </a>
          </h4>
          <h5>{{ $product->price }}</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class="card-footer">
          <a href="{{ route('cart') }}" class="btn btn-success btn-sm">Add to Cart</a>
        </div>
      </div>


    </div>
    @endforeach
  </div>

@endsection
