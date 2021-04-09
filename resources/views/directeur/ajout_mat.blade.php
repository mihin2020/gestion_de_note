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
                            <form role="form">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Matières</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Selection une matière">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Coeficient</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="coefficient">
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
                                            <tr>
                                                <td>Mathématique</td>
                                                <td>05</td>
                                                <td>
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
                <!-- /.container-fluid -->
               
 @endsection