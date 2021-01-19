@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Issue List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">IssueID</th>
          <th scope="col">Issue</th>
          <!--<th scope="col">Edition</th>-->
          <th scope="col">Department</th>
          <th scope="col">Technician</th>
          <th scope="col">Issue Type</th>
          <th scope="col">Issue Status</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>

        @foreach($books as $book)
        <tr>
          <td>{{$book->bookId}}</td>
          <td>{{$book->bookTitle}}</td>
          <!--<td>{{$book->edition}}</td>-->
          <td>{{$book->catId}}</td>
          <td>{{$book->authId}}</td>
          <td>{{$book->totalAvail}}</td>
          <td>{{$book->totalAvail}}</td>
          <td>
            
            @if(Auth::user()->type == 'Admin')
               <!--<a  class="btn btn-primary btn-xs" href="/editBook/{{$book->bookId}}"><i class="glyphicon glyphicon-edit"></i></a>-->
               <a  class="btn btn-primary btn-xs" href="/bookDelete/{{$book->bookId}}"><i class="glyphicon glyphicon-trash"></i></a> 
            @else
            @endif
            
          </td>
        </tr>
        @endforeach
  </div>
</div>


@endsection
