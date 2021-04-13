@extends('layouts.main')

@section('contenu')

                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1>Ajouter une matière/Classe de:</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->

            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Nouvelle matière</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="/ajout_mat" method="post">
                            {{@csrf_field()}}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Matières</label>
                                        <select class="form-control"  name='matiere' id="exampleFormControlSelect1">
                                            <option>Français</option>
                                            <option>Mathématique</option>
                                            <option>Anglais</option>
                                            <option>HG</option>
                                            <option>Dictée</option>
                                            <option>Svt</option>
                                            <option>EPS</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Coeficient</label>
                                        <input type="text" class="form-control" name="coeficient" id="exampleInputPassword1" placeholder="coefficient">
                                    </div>

                                    <div class="card-footer ">
                                        <button type="submit " class="btn btn-primary ">Valider</button>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Liste des Matières</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Désignations</th>
                                                <th>Coeficient</th>
                                                <th>Opération</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($matieres as $matiere)
                                            <tr>
                                                <td>{{$matiere->matiere}}</td>
                                                <td>{{$matiere->coeficient}}</td>
                                                <td>
                                                    <button class="btn btn-warning " type=" submit ">modifier</button>
                                                    <a href="delete/{{$matiere->id}}"><button type="button" class="btn btn-danger">Supprimer</button></a>
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
                <!-- /.container-fluid -->       
 @endsection