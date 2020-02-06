@extends('layouts.app')
<meta charset="utf-8">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                    <tr>
                      <th><strong>Id</strong></th>
                      <th><strong>Prenom</strong></th>
                      <th><strong>Nom de famille</strong></th>
                      <th><strong>Email</strong></th>
                      <th><strong>Id_comp</strong></th>
                      <th><strong>Competence</strong></th>
                      <th><strong>Niveau</strong></th>
                    </tr>
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->firstname}}</td>
                      <td>{{$user->lastname}}</td>
                      <td>{{$user->email}}</td>
                      @foreach($comp as $skills)
                      <td>{{$skills->id}}</td>
                      <td>{{$skills->nom}}</td>
                      <td>{{$skills->niveau}}</td>
                      @endforeach
                      <td><a href="{{route('edit')}}" class="btn btn-outline-dark">Add</a></td>
                    </tr>
                    </table>
                </div>
                <a  class="btn btn-secondary" href="{{ url('/home')}}">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection