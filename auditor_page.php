
<!-- START OF HEADER -->
  <?php include 'includes/header.php'; ?>
<!-- END OF HEADER -->

<!-- START OF HEADER -->
  <?php include 'includes/sidebar.php'; ?>
<!-- END OF HEADER -->


<!-- START OF AUDIT FORM TITLE -->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Admin/Auditor</h1>
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

<!-- END OF AUDIT FORM TITLE -->

<!-- START OF MAIN CONTENT -->


        <h2>Section title</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Job Title</th>
                    <th>Contact Information</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <!-- Sample Row (Replace with dynamic data) -->
                <tr>
                    <td>1</td>
                    <td>Gege Akutami</td>
                    <td>Administrator</td>
                    <td>gegeakutami@example.com</td>
                    <td>Admin</td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Suguru</td>
                    <td>Administrator</td>
                    <td>Suguru@example.com</td>
                    <td>Admin</td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>


<!-- END OF TABLE-->

  <!-- END OF MAIN CONTENT-->

<?php 
  include 'includes/footer.php';
?>