@extends('layouts.main')

@section('contenu')

               
        <!-- Content Wrapper. Contains page content -->
       
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Ajouter une note</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#">Accueil</a>
                                </li>
                                <li class="breadcrumb-item active">Ajout de note</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->

            <div class="container-fluid">
            <form action="/note" method="post">
            {{@csrf_field()}}
                <div class="card ">
                    <div class="card-header row">
                        <div class="col-6">
                        <h3 class="card-title">Classe : 6eme</h3>
                        </div>
                        <div class="col-3">
                        <div class="form-group">
                              <label for="exampleInputPassword1">Matières</label>
                                 <select class="form-control"  name='matiere' id="exampleFormControlSelect1">
                                 @foreach($matieres as $matiere)
                                     <option>{{$matiere->matiere}}</option>
                                 @endforeach
                                </select>     
                        </div>
                        </div>
                        <div class="col-3">
                        <div class="form-group">
                              <label for="exampleInputPassword1">coef</label>
                                 <select class="form-control"  name='coeficient' id="exampleFormControlSelect1">
                                   @foreach($matieres as $matiere)
                                     <option>{{$matiere->coeficient}}</option>
                                     @endforeach
                                </select>
                        </div>
                        </div>
                        
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Matricule</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Note 1</th>
                                    <th>Note 2</th>
                                    <th>Note 3</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($eleves as $eleve)
                                <tr>
                                    <td></td>
                                    <td>{{$eleve->nom}}</td>
                                    <td>{{$eleve->prenom}}</td>
                                    <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="note1" placeholder="Entrer note1">
                                    </div>
                                    <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="note2" placeholder="Entrer note2">
                                    </div>
                                    <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="note3" placeholder="Entrer note 3">
                                    </div></td>
                                    <td>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <button type="submit " class="btn btn-primary ">Valider</button>
                        </form>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
 @endsection