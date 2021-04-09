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
                                        <label for="exampleInputPassword1">Nom</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="nom" placeholder="Entrer nom">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Prénom</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="prenom" placeholder="Entrer prénoms">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Classe ténue</label>
                        
                                        <select class="form-control" name="classe" id="exampleFormControlSelect1">
                                       @foreach ( $classes as $classe)
                                        <option >{{$classe->classe}}</option>
                                        @endforeach
                                    </select>
                                 
                                    </div>
                                    <div class="form-group ">
                                        <label for="exampleInputEmail1 ">Email </label>
                                        <input type="email " class="form-control " id="exampleInputEmail1 " name="email" placeholder=" Email ">
                                    </div>
 
                                    <div class="form-group ">
                                        <label for="exampleInputPassword1 ">Mot de passe</label>
                                        <input type="password " class="form-control " id="exampleInputPassword1 " name="password" placeholder="Mot de passe ">
                                    </div>
                                    <div class="form-group ">
                                        <label for="exampleInputPassword1 ">Confirmer mot de passe</label>
                                        <input type="password " class="form-control " id="exampleInputPassword1 " name="password_confirm" placeholder="Confirmé mot de passe ">
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
                                            <th>RENOM</th>
                                            <th>EMAIL</th>
                                            <th class="text-center">CLASSE TENUE</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td class="text-center"><span class="tag tag-success">Approved</span></td>
                                            <td class="text-center">
                                                <button class="btn btn-warning " type=" submit ">modifier</button>
                                                <button class="btn btn-danger " type=" submit ">supprimer</button>
                                            </td>
                                        </tr>
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