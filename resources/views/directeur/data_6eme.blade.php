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
                            @foreach ($eleves as $eleve)
                            <tr>
                                <td>M32450</td>
                                <td>{{$eleve->nom}}</td>
                                <td>{{$eleve->prenom}}</td>
                                <td>{{$eleve->sexe}}</td>
                                <td>{{$eleve->date}}</td>
                                <td>{{$eleve->email}}</td>
                                <td>{{$eleve->numero}}</td>
                                <td>
                                  <a href="/ajout_note"><button class="btn btn-warning btn-xs " type=" submit ">ajouter</button></a>  
                                    <button class="btn btn-success  btn-xs" type=" submit ">Voir</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection        