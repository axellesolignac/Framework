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
      <form method="POST">
                    @csrf
                        <select type="text" name="competence" placeholder="Competence"required>
                          @foreach($skills as $skill)
                          <option value={{$skill->id}}>{{$skill->nom}}</option>
                          @endforeach 
                        </select>
                        <input type="number" style="width:100px;" max="5" min="1" name="niveau" placeholder="Niveau"required>
                        <input type="submit" name="valider" value="Modifier">
                    </form>
    </div>
  </div>
@endsection