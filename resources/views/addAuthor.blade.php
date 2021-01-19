@extends('layouts.master')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">Add Technician</div>
  <div class="panel-body">
  <form class="row" method="post" action="/addAuthors">
    {{csrf_field() }}
    <div class="col-xs-8 inner-addon left-addon form-group">
      <input type="text" name="name" class="form-control" placeholder="Name of Technician">
    </div>
    <div class="col-xs-4">
      <button type="submit" name="button" class="btn btn-primary">Add Technocian</button>
    </div>

  </form>
  </div>
</div>
@endsection
