@extends('layouts.entete-dash')
@section('section')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Créer bon d'entrer</li>
              </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h1 >Enregistrenent de bons de sortie / Entré</h1>

                    <!-- Multi Columns Form -->
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Statut bon</label>
                            <select id="bon-select" class="form-select" name="bon-select">
                              <option selected>Choisir le status du bon</option>
                              @foreach ($listestatusbon as $resultstatutbon)
                                <option name="bon-select" value="{{$resultstatutbon->id_doc}}" >{{Str::upper ($resultstatutbon->nomination) }}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Fonction Porteur</label>
                            <select id="inputState" class="form-select">
                              <option value="">Choisir une fonction du porteur</option>
                              @foreach ($listeporteur as $resultporteur)
                                <option name="" value="{{ $resultporteur->id_fonct }}" >{{ Str::upper($resultporteur->intitule) }}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Numéro Bon</label>
                            <input type="text" class="form-control" id="inputName5">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Cellule/Direction</label>
                            <select id="inputState" class="form-select">
                                <option value="">Choisir le département ou la Cellule / Direction</option>
                                @foreach ($listecellule as $resultcellule)
                                  <option name="" value="{{ $resultcellule->id_cell }}" >{{ Str::upper($resultcellule->nom_cell) }}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Classe Matériel</label>
                            <select id="inputState" class="form-select">
                                <option value="">Choisir la classe du matériel</option>
                                @foreach ($listeclasse as $resultclasse)
                                    <option value="{{ $resultclasse->id_class_mat }}">{{ $resultclasse->nom_class }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Autorisant</label>
                            <select id="inputState" class="form-select">
                                <option value="">Choisir l'autorisant</option>
                                @foreach ($listeporteur as $resultporteur)
                                  <option name="" value="{{ $resultporteur->id_fonct }}" >{{ Str::upper($resultporteur->intitule) }}</option>
                                @endforeach
                              </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Item Type Matériel</label>
                            <select id="inputState" class="form-select">
                              <option selected>----</option>
                              <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Fonction Autorisant</label>
                            <select id="inputState" class="form-select">
                              <option selected>----</option>
                              <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Marque Modèle</label>
                            <select id="inputState" class="form-select">
                              <option selected>----</option>
                              <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Emetteur</label>
                            <select id="inputState" class="form-select">
                              <option selected>----</option>
                              <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Quantité</label>
                            <input type="number" class="form-control" id="inputName5">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Fonction Emetteur</label>
                            <select id="inputState" class="form-select">
                              <option selected>----</option>
                              <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Laptop et Adaptateur</label>
                            <input type="text" class="form-control" id="inputName5">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label">Date sortie/Date d'entré</label>
                            <input type="date" class="form-control" id="inputEmail5">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword5" class="form-label">Identifiant Unique (Numéro Série)</label>
                            <input type="text" class="form-control" id="inputPassword5">
                        </div>
                        <div class="col-6">
                            <label for="inputAddress5" class="form-label">Motif</label>
                            <input type="text" class="form-control" id="inputAddres5s">
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">B</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Province de destination / Provenance</label>
                            <select id="inputState" class="form-select">
                              <option selected>----</option>
                              <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">P</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Destination / Province</label>
                            <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Genre</label>
                            <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Statut Provenance</label>
                            <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Porteur Matériel</label>
                            <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Observation</label>
                            <input type="text" class="form-control" name="" id="">
                        </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100">Enregistrer</button>

                      </div>
                    </form><!-- End Multi Columns Form -->

                  </div>
                </div>

              </div>
            </div>
          </section>
    </main>
@endsection
