@extends('layouts.main')

@section('contenu')

 
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1>Liste des élèves</h1>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>



            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Classe : 6eme</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Matricule</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Sexe</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>M32450</td>
                                <td>Mihin</td>
                                <td>hugues aime</td>
                                <td>Masculin</td>
                                <td>26</td>
                                <td>hugues@gmail.com</td>
                                <td>77151515</td>
                                <td>
                                    <button class="btn btn-warning btn-xs " type=" submit ">Modifier</button>
                                    <button class="btn btn-danger  btn-xs" type=" submit ">Supprimer</button>
                                    <button class="btn btn-success  btn-xs" type=" submit ">Voir</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection        