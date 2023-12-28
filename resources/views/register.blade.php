@extends('layout')
@section('content')
<div class ="col-sm-8">
	<h1>User Register Page</h1>
	<form method="post" action="/register">
  @csrf
  <div class="form-group">
    <label>User Name:</label>
    <input type="text" class="form-control" name="name">
  </div>
   <div class="form-group">
    <label>Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
  
   <div class="form-group">
    <label>Contact</label>
    <input type="text" class="form-control" name="contact">
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" class="form-control" name="password">
  </div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
@stop