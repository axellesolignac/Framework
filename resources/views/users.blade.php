@extends('layouts.app')
<meta charset="utf-8">
@section('content')
<div class="container">
    <div class="row justify-content-center">
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

                    @foreach($comp as $skills)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->firstname}}</td>
                      <td>{{$user->lastname}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$skills->id}}</td>
                      <td>{{$skills->nom}}</td>
                      <td>{{$skills->niveau}}</td>
                      <td><a href="#" class="btn btn-outline-primary">Modifier</a></td>
                      <td><a href="{{route('destroy',['id'=>$skills->id])}}" class="btn btn-outline-danger">Supprimer</a></td>
                    </tr>
                    @endforeach
                    </table>
                <a href="{{route('edit')}}" class="btn btn-outline-success">Ajouter</a>
                <a  class="btn btn-outline-secondary" href="{{ url('/home')}}">Retour</a>
</div>
@endsection