@extends('layouts.app')
<meta charset="utf-8">
@section('content')
  <div class="row">
    @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
    @endif
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('skills.update')}}" method = "post">
        @csrf
        <div class="form-group">
          <label for="id">Id comp:</label>
          <input type="text" name = "id" id = "id" class="form-control" value = "{{$user->competences->id}}">
        </div>
        <div class="form-group">
          <label for="name">Competence:</label>
          <input type="text" name = "name" id = "name" class="form-control" value = "{{$user->competences->name}}">
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <input type="text" name = "description" id = "description" class="form-control" value = "{{$user->competences->description}}">
        </div>
        <div class="form-group">
          <label for="niveau">Niveau:</label>
          <input type="text" name = "niveau" id = "niveau" class="form-control" value = "{{$user->competences->pivot->niveau}}">
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection