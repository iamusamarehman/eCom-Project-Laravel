@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">

    <div class="col-sm-4 offset-sm-4 ">

    <form action="login" method="POST">
  <div class="form-group">
    @csrf
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-default">Login</button>
</form>
    </div>
    </div>
    


  
   
</div>
@endsection