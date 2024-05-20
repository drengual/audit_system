    
<!-- START OF HEADER -->
  <?php include 'includes/header.php'; ?>
<!-- END OF HEADER -->

<!-- START OF HEADER -->
  <?php include 'includes/sidebar.php'; ?>
<!-- END OF HEADER -->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Audit form</h1>
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

      <!-- start form section -->
      <div class="container mt-5">
        <div class="row justify-content-center" style="margin-bottom: 40px;">
            <div class="col-md-8">
                <div class="card">
                    <!-- start title form -->
                    <div class="card-header">
                      Form
                    </div>
                    <!-- end title form -->

                    <!-- start body content -->
                    <div class="card-body">
                      <!-- start form -->
                       <form class="">
                        <div class="my-3">
                          <label class="mb-2">Type of checklist</label>
                          <select class="mb-2 form-control">
                            <option>Type of checklist</option>
                            <option>checklist 1</option>
                            <option>checklist 2</option>
                          </select>
                        </div>
                        
                        <div class="mb-3">
                          <label class="mb-2">Location</label>
                          <select class="mb-2 form-control">
                            <option>Location1</option>
                            <option>Location2</option>
                            <option>Location3</option>
                          </select>
                        </div>

                        <div class="row">

                            <div class="col-6">
                                <div class="row">
                                  <!-- start input time -->
                                  <label for="exampleState" class="mb-2">Time</label>
                                  <div class="col">
                                      <div class="mb-3">
                                        <input class="form-control" type="time">
                                      </div>
                                  </div>
                                  <!-- end input time -->

                                  <!-- star input morning and afternoon -->
                                  <div class="col">
                                      <div class="">
                                        <select class="mb-2 form-control">
                                          <option>Morning</option>
                                          <option>Afternoon</option>
                                        </select>
                                      </div>
                                  </div>
                                  <!-- end input morning and afternoon -->
                                </div>
                            </div>

                            <!-- start input utility person -->
                            <div class="col-6">
                                <div class="position-relative form-group"><label for="exampleState" class="mb-2">Utility Person</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                            </div>
                            <!-- end input utility person -->
                        </div>

                        <!-- start input inspected by -->
                        <div>
                           <label for="exampleState" class="mb-2">Inspected By:</label>
                            <div class="mb-3">
                              <input class="form-control" type="text">
                            </div>
                        </div>
                        <!-- end input inspected by -->

                        <!-- start input prepare by -->
                        <div>
                           <label for="exampleState" class="mb-2">Prepared By:</label>
                            <div class="mb-3">
                              <input class="form-control" type="text">
                            </div>
                        </div>
                        <!-- end input prepare by -->

                        <!-- start input noted by -->
                        <div class="mb-5">
                           <label for="exampleState" class="mb-2">Noted By:</label>
                            <div class="mb-3">
                              <input class="form-control" type="text">
                            </div>
                        </div>
                        <!-- end input noted by -->

                        <!-- table section -->
                        <section class="border p-2 shadow shadow-sm mb-3">
                          <table class="table table-light table-striped" id="myTable">
                          <thead>
                            <!-- start table head -->
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Component</th>
                              <th scope="col">Checked</th>
                            </tr>
                            <!-- end table head -->
                          </thead>
                          <tbody>
                            <!-- start data 1 -->
                            <tr>
                              <th scope="row">1</th>
                              <td>Toilet and toilet seats cleaned and disinfected.</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 1 -->

                            <!-- start data 2 -->
                            <tr>
                              <th scope="row">2</th>
                              <td>Urinal handles cleaned and disinfected.</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 2 -->

                            <!-- start data 3 -->
                            <tr>
                              <th scope="row">3</th>
                              <td>Urinal screen cleaned and blocks replaced.</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 3 -->

                            <!-- start data 4 -->
                            <tr>
                              <th scope="row">4</th>
                              <td>Sink and Fixtures cleaned and disinfected.</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 4 -->

                            <!-- start data 5 -->
                            <tr>
                              <th scope="row">5</th>
                              <td>Mirrors cleaned</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 5 -->

                            <!-- start data 6 -->
                            <tr>
                              <th scope="row">6</th>
                              <td>Door handles, wall cleaned and disinfected.</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 6 -->

                            <!-- start data 7 -->
                            <tr>
                              <th scope="row">7</th>
                              <td>The trash can is emplied/replaced trashbag</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div></td>
                            </tr>
                            <!-- end data 7 -->

                            <!-- start data 8 -->
                            <tr>
                              <th scope="row">8</th>
                              <td>Floors free of paper and trash</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 8 -->

                            <!-- start data 9 -->
                            <tr>
                              <th scope="row">9</th>
                              <td>Countertops, ledges, etc. cleaned and disinfected.</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 9 -->

                            <!-- start data 10 -->
                            <tr>
                              <th scope="row">10</th>
                              <td>Floor drains and drain covers are open and free of debris.</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 10 -->

                            <!-- start data 11 -->
                            <tr>
                              <th scope="row">11</th>
                              <td>Light bulbs/flourecent are functioning</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 11 -->

                            <!-- start data 12 -->
                            <tr>
                              <th scope="row">12</th>
                              <td>Ceiling wall vents cleaned and disinfected.</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 12 -->

                            <!-- start data 13 -->
                            <tr>
                              <th scope="row">13</th>
                              <td>Floor has been mopped clean with a proper cleaning or disinfecting solution</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 13 -->

                            <!-- start data 14 -->
                            <tr>
                              <th scope="row">14</th>
                              <td>Floor has been mopped clean with a proper cleaning or disinfecting solution</td>
                              <td>
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="customSwitch1" style="height: 20px;width: 40px">
                                  <label class="form-check-label" for="customSwitch1">
                                    <span class="unchecked-icon"></span>
                                    <span class="checked-icon d-none"></span>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <!-- end data 14 -->
                          </tbody>
                        </table>
                        </section>
                        <!-- table section -->
                        <!-- start button submit -->
                        <button class="mt-2 btn btn-primary">Submit</button>
                        <!-- end button submit -->
                      </form>
                      <!-- end form -->
                    </div>
                    <!-- end body content -->
                </div>
            </div>
          </div>
      </div>
      <!-- end form section -->
    </main>

<?php 
  include 'includes/footer.php';
?>