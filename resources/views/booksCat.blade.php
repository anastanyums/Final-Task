@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Category List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Category ID</th>
          <th scope="col">Cateogry Name</th>
          

        </tr>
      </thead>
      <tbody>
        @foreach($cats as $cat)
        <tr>
          <td>{{$cat->catId}}</td>
          <td>{{$cat->catName}}</td>
          <td>
            
          </td>
        </tr>
          @endforeach
  </div>
</div>


@endsection
