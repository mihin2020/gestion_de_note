@extends('layouts.main')

@section('contenu')
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3> <!-- Statistic -->

                                    <p>Nombre d'élèves</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3><!-- Statistic -->

                                    <p>Nombre de professeur</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>44</h3><!-- Statistic -->

                                    <p>Admis</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>65</h3><!-- Statistic -->

                                    <p>Resultat</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>

                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Paramètre annuel</h3>
                        </div>
                        <div class="card-body">
                            <form action="/index" method="post" >
                            {{@csrf_field()}}
                                <div class="row">
                                    <!-- mise en plac d'un formaulaire pour le parametrage annuel -->
                                    <div class="col-4">
                                        <input type="text" class="form-control" name="annee" placeholder="Année">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control"  name="semestre" placeholder="Semetre">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control"  name="classe" placeholder="Classe disponible">
                                    </div>
                                    <div>
                                        <button class="btn btn-info mt-3" type=" submit ">Valider</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="row ">
                        <div class="col-12">
                            <div class="card card-info ">
                                <div class="card-header ">
                                    <h3 class="card-title">Paramétrage</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ANNEE</th>
                                                <th class="text-center">SEMESTRE</th>
                                                <th class="text-center">CLASSE</th>
                                                <th class="text-center">OPERATIONS</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                    
                                            <tr>
                                                <td></td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center">
                                                <a href=""><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Modifier</button></a>
                                                <a href=""><button type="button" class="btn btn-danger">Supprimer</button></a>
                                                </td>
                                            </tr>
                                      
                                        </tbody>
                                    </table>
                                                                <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center font-weight-bold">
                                            Voulez vous vraiment supprimer ? <br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                                            
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>

                         <!-- modification de formulaire-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Paramétrage annuel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="" method="post" >
                            {{@csrf_field()}}
                           
                                <div class="row">
                                    <!-- mise en plac d'un formaulaire pour le parametrage annuel -->
                                    <div class="col-4">
                                        <input type="text"  value='' class="form-control" name="annee" placeholder="Année">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control"  value='' name="semestre" placeholder="Semetre">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control"  value='' name="classe" placeholder="Classe disponible">
                                    </div>
                                    <div>
                                </div>
                            </form>
                            </div>
                              <div class="modal-footer">
                                     <a href="update/{{$parametre->id}}"><button class="btn btn-info "type=" submit ">Valider</button></a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                                    </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>


                
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
                    <script>
                    $('#exampleModal').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var recipient = button.data('whatever') // Extract info from data-* attributes
                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                    var modal = $(this)
                    modal.find('.modal-title').text('New message to ' + recipient)
                    modal.find('.modal-body input').val(recipient)
                    })
                </script>
 @endsection
 