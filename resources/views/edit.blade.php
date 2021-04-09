@extends('layouts.main')

@section('contenu')
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
                            <form action="/update/{id}" method="post" > @method('PATCH') 
                            {{@csrf_field()}}
                                <div class="row">
                                    <!-- mise en plac d'un formaulaire pour le parametrage annuel -->
                                    <div class="col-4">
                                        <input type="text"  value='{{$parametre->annee}}'class="form-control" name="annee" placeholder="Année">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control"  value='{{$parametre->semestre}}' name="semestre" placeholder="Semetre">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control"  value='{{$parametre->classe}}' name="classe" placeholder="Classe disponible">
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

                        
                        @endsection