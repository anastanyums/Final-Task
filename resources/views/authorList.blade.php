@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Technician List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Technician ID</th>
          <th scope="col">Technician Name</th>
          

        </tr>
      </thead>
      <tbody>
      @foreach($authors as $author)
        <tr>
          <td>{{$author->authId}}</td>
          <td>{{$author->name}}</td>
          <td>
            
          </td>
        </tr>
          @endforeach
  </div>
</div>


@endsection
