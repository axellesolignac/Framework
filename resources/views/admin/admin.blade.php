<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    h1 {
        text-align : center;
        padding : 50px;
        color : grey;
      }
  </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>ESPACE ADMIN</h1>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Gestion de mes competences
                    </button>
                  </h2>
                </div>
            
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
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
                          </tr>
                          <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->firstname}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->email}}</td>
                          </tr>
                          
                          <tr>
                            <th><strong>Id_comp</strong></th>
                            <th><strong>Competence</strong></th>
                            <th><strong>Niveau</strong></th>
                          </tr>
                          @foreach($comp as $skills)
                          <tr>
                            <td>{{$skills->id}}</td>
                            <td>{{$skills->nom}}</td>
                            <td>{{$skills->pivot->niveau}}</td>
                            <td><a href="{{route('admin_destroy',['id'=>$skills->id])}}" class="btn btn-outline-danger">Supprimer</a></td>
                          </tr>
                          @endforeach
                          </table>
                          <a href="{{route('admin_adding')}}" class="btn btn-outline-success" style="margin-right: 10px;">Ajouter</a>
                          <a href="{{route('admin_editing')}}" class="btn btn-outline-primary" style="margin-right: 10px;">Modifier</a>
                          <a  class="btn btn-outline-secondary" href="{{ url('/admin/logout')}}">Logout</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Gestion des competences de tous les utilisateurs
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">

                    <table class="table">
                      <tr>
                        <th><strong>Id</strong></th>
                        <th><strong>Prenom</strong></th>
                        <th><strong>Nom de famille</strong></th>
                        <th><strong>Email</strong></th>
                        <th><strong>Id comp</strong></th>
                        <th><strong>Competence</strong></th>
                        <th><strong>Description</strong></th>
                        <th> <strong>Niveau</strong></th>
                      </tr>

                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>