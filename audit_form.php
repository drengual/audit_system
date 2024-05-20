
<!-- START OF HEADER -->
  <?php include 'includes/header.php'; ?>
<!-- END OF HEADER -->

<!-- START OF HEADER -->
  <?php include 'includes/sidebar.php'; ?>
<!-- END OF HEADER -->


<!-- START OF AUDIT FORM TITLE -->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">CREATE AUDITOR </h1>
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

  <div class="container mt-5">
    <div class="row justify-content-center" style="margin-bottom: 40px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Admin/Auditor Form
                </div>
                <div class="card-body">
                    <form>
                        <!-- Personal Information -->
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name:</label>
                            <input type="text" class="form-control" id="fullName" placeholder="John Doe">
                        </div>
                        <div class="mb-3">
                            <label for="jobTitle" class="form-label">Job Title:</label>
                            <input type="text" class="form-control" id="jobTitle" placeholder="Administrator">
                        </div>
                        <div class="mb-3">
                            <label for="contactInfo" class="form-label">Contact Information:</label>
                            <input type="text" class="form-control" id="contactInfo" placeholder="john.doe@example.com">
                        </div>

                        <!-- Role and Permissions -->
                        <div class="mb-3">
                            <label for="role" class="form-label">Role:</label>
                            <select class="form-select" id="role">
                                <option value="admin">Administrator</option>
                                <option value="auditor">Auditor</option>
                            </select>
                        </div>

                        <!-- Security Information -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="johndoe">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="********">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END OF MAIN CONTENT-->

<?php 
  include 'includes/footer.php';
?>