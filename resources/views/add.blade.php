@extends('layout')
@section('content')
<div class="col-sm-6">
	<h1>Add a new restaurant</h1>

<form method="post" action="add">
  @csrf
  <div class="form-group">
    <label>Restaurrant Name:</label>
    <input type="text" class="form-control" name="name">
  </div>
   <div class="form-group">
    <label>Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label>Address:</label>
    <input type="text" class="form-control" name="address">
  </div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
@stop