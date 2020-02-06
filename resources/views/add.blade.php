@extends('layouts.app')
@section('content')
  <div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
      <form method="POST">
      @csrf
          <select type=text name=competence placeholder='Competence'required>
          @foreach($compe as $skill)
          <option value={{$skill->id}}>{{$skill->id}}. {{$skill->nom}}</option>
          @endforeach
          </select>
          <input type=number max=5 min=1 name=niveau placeholder='Niveau'required>
          <input type=submit name="add" value="Ajouter">
      </form>
    </div>
  </div>
@endsection