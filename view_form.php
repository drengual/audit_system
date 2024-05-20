    
<!-- START OF HEADER -->
  <?php include 'includes/header.php'; ?>
<!-- END OF HEADER -->

<!-- START OF HEADER -->
  <?php include 'includes/sidebar.php'; ?>
<!-- END OF HEADER -->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Display Audit</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <!-- start view form content -->
      <div class="container mt-5">
        <div class="row justify-content-center" style="margin-bottom: 40px;">
            <div class="col-md-8">
                <div class="card">
                    <!-- start title form -->
                    <div class="card-header d-flex justify-content-between">
                      <!-- start title form -->
                      <div>
                        Display Audit Details
                      </div>
                      <!-- end title form -->

                      <!-- start print button -->
                      <div>
                        <a class="btn btn-secondary me-1" href="#"><i class="fa-solid fa-print"></i></a>
                      </div>
                      <!-- end print button -->
                    </div>
                    <!-- end title form -->

                    <!-- start body content -->
                    <div class="card-body">
                      <div class="d-flex justify-content-center mb-3">
                        <!-- start logo of school -->
                         <div>
                           <img src="assets/images/logo.png" height="100px">
                         </div>
                         <!-- end logo of school -->

                         <!-- start info of school -->
                         <div class="d-flex justify-content-center align-items-center flex-column">
                           <h6 class="fw-bold">Republic of the Philippines</h6>
                           <h6 class="fw-bold">CAVITE STATE UNIVERSITY</h6>
                           <span>CCAT Campus</span>
                           <span>Rosario, Cavite</span>
                           <span>(046) 437-9505 / (046) 437-6659</span>
                           <span>cvsurosario@cvsu.edu.ph</span>
                           <span>www.cvsu-rosario.edu.ph</span>
                         </div>
                         <!-- end info of school -->
                      </div>

                      <!-- table section -->
                        <section class="border p-2  mb-5">
                          <table class="table table-light table-striped" id="myTable">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Component</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Toilet and toilet seats cleaned and disinfected.</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Urinal handles cleaned and disinfected.</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Urinal screen cleaned and blocks replaced.</td>
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <td>Sink and Fixtures cleaned and disinfected.</td>
                            </tr>
                            <tr>
                              <th scope="row">5</th>
                              <td>Mirrors cleaned</td>
                            </tr>
                            <tr>
                              <th scope="row">6</th>
                              <td>Door handles, wall cleaned and disinfected.</td>
                            </tr>
                            <tr>
                              <th scope="row">7</th>
                              <td>The trash can is emplied/replaced trashbag</td>
                            </tr>
                            <tr>
                              <th scope="row">8</th>
                              <td>Floors free of paper and trash</td>
                            </tr>
                            <tr>
                              <th scope="row">9</th>
                              <td>Countertops, ledges, etc. cleaned and disinfected.</td>
                            </tr>
                            <tr>
                              <th scope="row">10</th>
                              <td>Floor drains and drain covers are open and free of debris.</td>
                            </tr>
                            <tr>
                              <th scope="row">11</th>
                              <td>Light bulbs/flourecent are functioning</td>
                            </tr>
                            <tr>
                              <th scope="row">12</th>
                              <td>Ceiling wall vents cleaned and disinfected.</td>
                            </tr>
                            <tr>
                              <th scope="row">13</th>
                              <td>Floor has been mopped clean with a proper cleaning or disinfecting solution</td>
                            </tr>
                            <tr>
                              <th scope="row">14</th>
                              <td>Floor has been mopped clean with a proper cleaning or disinfecting solution</td>
                            </tr>
                          </tbody>
                        </table>
                        </section>
                        <!-- table section -->

                        <div class="mb-5">
                          <h6>Prepared by</h6>
                          <h6 class="fw-bold">RACQUELA A CATALAN</h6>
                          <p>Coordinator</p>
                        </div>

                        <div>
                          <h6>Noted by</h6>
                          <h6 class="fw-bold">JURICK P PAULINO MT</h6>
                          <p>Director</p>
                        </div>

                    </div>
                    <!-- end body content -->
                </div>
            </div>
          </div>
      </div>
      <!-- end view form content -->
    </main>

<?php 
  include 'includes/footer.php';
?>