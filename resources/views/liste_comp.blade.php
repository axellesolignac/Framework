@extends('layouts.app')
<meta charset="utf-8">
@section('content')
<div class="container">
    <div>
        <div>
            <div>
                 <a class="btn btn-secondary" href="{{ url('/home')}}">Retour</a>
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
                        <th><strong>Id comp</strong></th>
                        <th><strong>Competence</strong></th>
                        <th><strong>Src</strong></th>
                        <th><strong>Description</strong></th>
                        <th> <strong>Niveau</strong></th>
                      </tr>
                      @foreach ($user as $user)
                      @foreach($user->competences as $skill)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$skill->id}}</td>
                        <td>{{$skill->nom}}</td>
                        <td><img src={{$skill->src}} width=50px height=50px ></td>
                        <td>{{$skill->description}}</td>
                        <td>{{$skill->pivot->niveau}}</td>
                       </tr>
                        @endforeach
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection