
@extends('layouts.main')

@section('contenu')

            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Ajout de professeur</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="post" action="/ajout_prof">
                            {{@csrf_field()}}
                                <div class="card-body">
                                    <div class="form-group">
                                            @if($errors->has('nom'))
                                            <p class="font-weight-bold text-info">{{$errors->first('nom') }}</p> 
                                            @endif
                                        <label for="exampleInputPassword1">Nom</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="nom" placeholder="Entrer nom">
                                    </div>

                                    <div class="form-group">
                                            @if($errors->has('prenom'))
                                            <p class="font-weight-bold text-info">{{$errors->first('prenom') }}</p> 
                                            @endif
                                        <label for="exampleInputPassword1">Prénom</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="prenom" placeholder="Entrer prénoms">
                                    </div>
                                    <div class="form-group">
                                           @if($errors->has('classe'))
                                            <p class="font-weight-bold text-info">{{$errors->first('classe') }}</p> 
                                            @endif
                                        <label for="exampleFormControlSelect1">Classe ténue</label>
                                        <select class="form-control" name="classe" id="exampleFormControlSelect1">
                                       @foreach ( $classes as $classe)
                                        <option >{{$classe->classe}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="form-group ">
                                            @if($errors->has('email'))
                                            <p class="font-weight-bold text-info">{{$errors->first('email') }}</p> 
                                            @endif
                                        <label for="exampleInputEmail1 ">Email </label>
                                        <input type="email " class="form-control " id="exampleInputEmail1 " name="email" placeholder=" Email ">
                                    </div>

                                    <div class="form-group ">
                                           @if($errors->has('password'))
                                            <p class="font-weight-bold text-info">{{$errors->first('password') }}</p> 
                                            @endif
                                    <label for="inputPassword5">Mot de passe</label>
                                        <input type="password" id="inputPassword5" name="password" class="form-control" placeholder="mot de passe "aria-describedby="passwordHelpBlock">
                                        <small id="passwordHelpBlock" class="form-text text-muted"></small>
                                    </div>

                                    <div class="form-group ">
                                            @if($errors->has('password'))
                                            <p class="font-weight-bold text-info">{{$errors->first('password') }}</p> 
                                            @endif
                                    <label for="inputPassword5">Confirmer mot de passe</label>
                                        <input type="password" id="inputPassword5" name="password_confirm" class="form-control" placeholder="Confirmé mot de passe "aria-describedby="passwordHelpBlock">
                                        <small id="passwordHelpBlock" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <button type="submit " class="btn btn-primary ">Valider</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Liste des Professeur</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>NOM</th>
                                            <th>PRENOMS</th>
                                            <th>EMAIL</th>
                                            <th class="text-center">CLASSE TENUE</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ajout_profs as $ajout_prof)
                                        <tr>
                                            <td>{{$ajout_prof->nom}}</td>
                                            <td>{{$ajout_prof->prenom}}</td>
                                            <td>{{$ajout_prof->email}}</td>
                                            <td class="text-center"><span class="tag tag-success">{{$ajout_prof->classe}}</span></td>
                                            <td class="text-center">
                                                <button class="btn btn-warning " type=" submit ">modifier</button>
                                                <a href="delete/{{$ajout_prof->id}}"><button type="button" class="btn btn-danger">Supprimer</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>

@endsection