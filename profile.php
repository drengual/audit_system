
<!-- START OF HEADER -->
  <?php include 'includes/header.php'; ?>
<!-- END OF HEADER -->

<!-- START OF HEADER -->
  <?php include 'includes/sidebar.php'; ?>
<!-- END OF HEADER -->


<!-- START OF ADMIN USER TITLE -->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">ADMIN PROFILE</h1>
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

<!-- END OF ADMIN USER TITLE -->

<!-- START OF MAIN CONTENT -->

<div class="container mt-5" style="margin-bottom: 30px;">
    <div class="row">
        <div class="col-lg-4 col-md-12" style="padding-bottom: 20px;">
            <div class="card">
                <div class="white-box">
                    <div class="user-bg">
                        <br>
                        <img id="profilePicture" src="assets/images/admin.jpg" alt="Profile Picture">
                        <div class="overlay-box"></div>
                    </div>

                    <center><h5 class="card-title" style="padding-top: 10px;">Gojo Satoru</h5></center>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Something is here</li>
                        <li class="list-group-item">Something is here</li>
                    </ul>
                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <button class="btn btn-success change-picture-btn">Change Picture</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Admin Profile
                </div>
                <div class="card-body">
                    <form id="adminProfileForm">
                        <!-- User Information -->
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name:</label>
                            <input type="text" class="form-control" id="fullName" placeholder="John Doe">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="johndoe">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address:</label>
                            <input type="email" class="form-control" id="email" placeholder="john.doe@example.com">
                        </div>

                        <!-- Contact Information -->
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number:</label>
                            <input type="tel" class="form-control" id="phoneNumber" placeholder="123-456-7890">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address:</label>
                            <textarea class="form-control" id="address" rows="2"></textarea>
                        </div>

                        <!-- Security Settings -->
                        <hr class="my-4">
                        <h5 class="mb-3">Security Settings</h5>
                        <div class="mb-3">
                            <label for="password" class="form-label">Change Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter new password">
                        </div>

                        <!-- Save Changes Button -->
                        <button type="button" class="btn btn-primary" onclick="saveChanges()">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END OF MAIN CONTENT -->


<?php 
  include 'includes/footer.php';
?>