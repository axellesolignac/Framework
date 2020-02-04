@extends('layouts.app')
@section('content')
  <div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('skills.store')}}" method = "post">
        @csrf
        <div class="form-group">
          <label for="id">id:</label>
          <input type="text" name = "id" id = "id" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="nom">Nom:</label>
          <input type="text" name = "nom" id = "nom" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <input type="text" name = "description" id = "description" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="src">Source:</label>
          <input type="text" name = "src" id = "src" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection