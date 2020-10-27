@extends('layout')
@section('content')
<div class ="col-sm-8">
	<h1>User Login Page</h1>
	<form method="post" action="/login">
  @csrf
  
  <div class="form-group">
    <label>Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" class="form-control" name="password">
  </div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
@stop