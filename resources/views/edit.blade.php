@extends('layout')
@section('content')
<div class="col-sm-6">
	<h1>Delete a new restaurant</h1>

<form method="post" action="/edit">
  @csrf
  
  <div class="form-group">
    <label>Restaurant Name:</label>
    <input type="hidden" value= "{{$data->id}} " name="id">
    <input type="text" class="form-control" value= "{{$data->name}} " name="name">
  </div>
   <div class="form-group">
    <label>Email address:</label>
    <input type="email" class="form-control" value = "{{$data->email}}" name="email">
  </div>
  <div class="form-group">
    <label>Address:</label>
    <input type="text" class="form-control" value="{{$data->address}}" name="address">
  </div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
@stop