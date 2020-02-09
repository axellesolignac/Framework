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

                    Bienvenu dans ma premiere gestion des competences!
                </div>
            <center>
            <a  class="btn btn-dark" href="{{ url('/user')}}">Gerer mes competences</a>
            <a  class="btn btn-dark" href="{{ url('/skills')}}">Voir celles des users</a>
            </center>
            </div>
        </div>
    </div>
</div>
@endsection
