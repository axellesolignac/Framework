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
                    <strong>Id</strong> : {{$user->id}}</br>
                    <strong>Prenom</strong> : {{$user->firstname}} </br>
                    <strong>Nom de famille</strong> : {{$user->lastname}}</br>
                    <strong>Email</strong> : {{$user->email}}</br>
                </div>
                <a  class="btn btn-secondary" href="{{ url('/home')}}">Retour</a>
            </div>
        </div>
    </div>
</div>
@endsection