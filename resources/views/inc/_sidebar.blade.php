<div class="col-lg-3">

    <h1 class="my-4">{{ config('app.name') }}</h1>
    <div class="list-group">


     @foreach ($categories as $category)
     <a href="{{ route('category.list', $category->slug) }}" class="list-group-item">
       {{ $category->name }}
    </a>
     @endforeach


    </div>

  </div>
  <!-- /.col-lg-3 -->
