@extends('layouts.entete-dash')
@section('section')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                    </div>
                  </div>

                </div>
              </div>

            </div>

            <div class="col-12">
                <section class="section">
                    <div class="row">
                      <div class="col-lg-12">

                        <div class="card">
                          <div class="card-body">
                            <p></p>
                            <div class="row">
                                <div class="col-lg-10">
                                    <input class="form-control form-control-md" type="search" placeholder="Recherche...." name="" id="">
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
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Brandon Jacob</td>
                                  <td>Designer</td>
                                  <td>28</td>
                                  <td>2016-05-25</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Bridie Kessler</td>
                                  <td>Developer</td>
                                  <td>35</td>
                                  <td>2014-12-05</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Ashleigh Langosh</td>
                                  <td>Finance</td>
                                  <td>45</td>
                                  <td>2011-08-12</td>
                                </tr>
                                <tr>
                                  <th scope="row">4</th>
                                  <td>Angus Grady</td>
                                  <td>HR</td>
                                  <td>34</td>
                                  <td>2012-06-11</td>
                                </tr>
                                <tr>
                                  <th scope="row">5</th>
                                  <td>Raheem Lehner</td>
                                  <td>Dynamic Division Officer</td>
                                  <td>47</td>
                                  <td>2011-04-19</td>
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

  </main>
@endsection
