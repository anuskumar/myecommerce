@extends('layouts.front-end')

@section('title')
{{ $product->name  }}
@stop


@section('content')
<div class="col-lg-9">

    <div class="card mt-4">
      <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
      <div class="card-body">
        <h3 class="card-title">{{ $product->name }}</h3>
        <h6>Category:  {{ $product->category->name }}</h6>
        <h4>BDT {{ $product->price }}</h4>
        <p class="card-text">
        {{ $product->description }}
        </p>
        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
        4.0 stars
      </div>
    </div>
    <!-- /.card -->

    <div class="card card-outline-secondary my-4">
      <div class="card-header">
        Product Details
      </div>
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>

        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>

        <hr>

        <a href="#" class="btn btn-success">Add To Cart</a>
      </div>
    </div>
    <!-- /.card -->

  </div>
  <!-- /.col-lg-9 -->

</div>

</div>
@endsection
