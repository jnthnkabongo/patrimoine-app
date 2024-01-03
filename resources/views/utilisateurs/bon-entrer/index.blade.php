@extends('layouts.entete-dash')
@section('section')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Liste bon d'entrer</li>
              </ol>
            </nav>
          </div>
        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <section class="section">
                                <div class="row">
                                <div class="col-lg-12">

                                    <div class="card">
                                    <div class="card-body">
                                        <p></p>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <a class="btn btn-primary w-100 btn-md" href="{{ route('creer-bon-entrer') }}">Ajouter Bon d'entrer</a>
                                            </div>
                                            <div class="col-lg-8">
                                                <input class="form-control form-control-md" type="search" name="" id="" placeholder="Rechercher un bon d'entré...">
                                            </div>
                                            <div class="col-lg-2">
                                                <button class="btn btn-primary w-100 btn-md">Recherche...</button>
                                            </div>

                                        </div>
                                        <!-- Table with stripped rows -->
                                        <table class="table datatable table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Position</th>
                                                    <th scope="col">Age</th>
                                                    <th scope="col">Start Date</th>
                                                    <th scope="col">Start short</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Brandon Jacob</td>
                                                    <td>Designer</td>
                                                    <td>28</td>
                                                    <td>28</td>
                                                    <td>2016-05-25</td>
                                                    <td>
                                                        <a name="" id="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#" role="button"><i class="bi bi-eye-fill"></i></a>&nbsp;
                                                        <a name="" id="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" href="#" role="button" href="#" role="button"> <i class="bi bi-pencil-fill"></i></a>&nbsp;
                                                        <a name="" id="" class="btn btn-primary" href="#" role="button"> <i class="bi bi-printer-fill"></i></a>&nbsp;
                                                        <a name="" id="" class="btn btn-danger" href="#" role="button"> <i class="bi bi-trash-fill"></i></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <!-- End Table with stripped rows -->
                                    </div>
                                    </div>

                                </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal de visualisation des données-->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <center><h1 class="modal-title fs-5" id="staticBackdropLabel">Modal de visualisation des données</h1></center>
                    <div class="row g-3 mt-2">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                    <div class="row g-3 mt-1">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Valider</button>
                </div>
            </div>
            </div>
        </div>

         <!-- Modal de modification des données-->
         <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <center><h1 class="modal-title fs-5" id="staticBackdropLabel">Modal de modification des données</h1></center>
                    <div class="row g-3 mt-2">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Prenom" aria-label="First name">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                    <div class="row g-3 mt-1">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Valider</button>
                </div>
            </div>
            </div>
        </div>
    </main>
@endsection
