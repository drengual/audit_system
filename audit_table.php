    
<!-- START OF HEADER -->
  <?php include 'includes/header.php'; ?>
<!-- END OF HEADER -->

<!-- START OF HEADER -->
  <?php include 'includes/sidebar.php'; ?>
<!-- END OF HEADER -->


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Audit Table</h1>
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

      <!-- start table name and search section -->
      <section class="row container my-3">
        <label class="mb-2">Filter</label>
        <!-- start table name -->
        <div class="col">
          <div>
            <select class="mb-2 form-control form-control-sm">
              <option>Date</option>
              <option>Depaerment</option>
            </select>
          </div>      
        </div>
        <!-- end table name -->

        <!-- start search button -->
        <div class="col">
        <form class="d-flex align-items-center">
          <input class="form-control form-control-sm me-2" id="searchInput" onkeyup="searchInputFunction()" type="text" placeholder="Search" aria-label="Search">
          <i class="fas fa-search" aria-hidden="true" style="font-size:25px"></i>
        </form>
      </div>
      <!-- end search button -->
      </section>
      <!-- end table and search section -->


      <!-- table section -->
      <section class=" p-2">
        <table class="table table-striped text-center" id="myTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Type of check</th>
            <th scope="col">Department</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
            <th scope="col">View</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Washroom</td>
            <td>Department of Computer Study</td>
            <td>february 23, 2024</td>
            <td>
              <a class="btn btn-sm btn-primary me-1" href="#"><i class="fa-solid fa-print"></i></a>
              <a class="btn btn-sm btn-success me-1" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
              <a class="btn btn-sm btn-danger" href="#"><i class="fa-solid fa-trash"></i></a>
            </td>
            <td><a class="btn btn-sm btn-secondary" href="view_form.php"><i class="fa-solid fa-eye"></i></td>
          </tr>
          
        </tbody>
      </table>
      </section>
      <!-- table section -->
    </main>

<?php 
  include 'includes/footer.php';
?>