@extends('layouts.front-end')

@section('title')
 Register
@stop


@section('content')
    <br>



    <div class="card mt-4">

        <form action="{{ route('auth.register') }} method="post">



            <div class="form-group">
              <label for="full_name">Full Name</label>
              <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Full Name" required
            </div>


            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>

            <div class="form-group">
              <label for="phn_number">PHN Number</label>
              <input type="text" name="phn_number" class="form-control" id="phn_number" placeholder="PHN Number" required>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


    </div>

</div>

@endsection
