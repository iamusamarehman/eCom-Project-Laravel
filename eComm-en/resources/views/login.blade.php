@extends('master')
@section("content")
<div class="container">
    <div class="row">

    <div class="col-sm-4 offset-sm-4 ">

    <form >
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
    </div>
    </div>
    


  
   
</div>
@endsection