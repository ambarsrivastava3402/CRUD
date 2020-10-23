@extends('layout')
@section('content')
<div>
	<h1>list of restaurants</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $rest)
    <tr>
      <th >{{$rest->id}}</th>
      <td>{{$rest->name}}</td>
      <td>{{$rest->email}}</td>
      <td>{{$rest->address}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@stop