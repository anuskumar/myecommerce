@extends('layouts.front-end')

@section('title')
 Register
@stop


@section('content')
    <br>
    <div class="card mt-4">
        <form>

            <div class="form-group">
              <label for="full_name">Full Name</label>
              <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Full Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>

            <div class="form-group">
              <label for="phn_number">PHN Number</label>
              <input type="text" name="phn_number" class="form-control" id="phn_number" placeholder="PHN Number">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@stop