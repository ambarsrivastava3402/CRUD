@extends('layout')
@section('content')
<div>
	<h1>list of restaurants</h1>
  @if(Session::get('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  Restaurant added successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

  @endif
   @if(Session::get('status2'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  Restaurant deleted successfully
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

  @endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th>operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $rest)
    <tr>
      <th >{{$rest->id}}</th>
      <td>{{$rest->name}}</td>
      <td>{{$rest->email}}</td>
      <td>{{$rest->address}}</td>
      <td><a href="delete/{{$rest->id}}"><i class="fa fa-trash"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@stop