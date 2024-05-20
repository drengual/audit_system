<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/main.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

  /* START OF NOTIFICATION */

			.header {
			    /* Your existing header styles */
			    display: flex;
			    justify-content: space-between;
			    align-items: center;
			}

			.notification-bell {
			    display: flex;
			    align-items: center;
			    cursor: pointer;
			    margin-right: 20px; /* Adjust margin as needed */
			}

			.notification-bell .bi-bell {
			    font-size: 1.5rem; /* Adjust icon size as needed */
			    color: white; /* Change to white */
			}

			.notification-count {
			    background-color: red; /* Adjust background color as needed */
			    color: white; /* Change to white */
			    border-radius: 50%;
			    padding: 4px 8px;
			    font-size: 0.8rem;
			    margin-left: 4px;
			}

			    /* Add your custom styles here */
	    .notification-bell {
	      position: relative;
	      cursor: pointer;
	    }

	    .notification-dropdown {
	      position: absolute;
	      top: 100%;
	      right: 0;
	      background-color: #fff;
	      border: 1px solid #ccc;
	      padding: 10px;
	      display: none;
	      min-width: 150px;
	      z-index: 1;
	    }

	    .notification-dropdown a {
	      display: block;
	      padding: 8px 10px;
	      text-decoration: none;
	      color: #333;
	    }

	    .notification-dropdown a:hover {
	      background-color: #f0f0f0;
	    }

	    

  /* END OF NOTIFICATION */


  /* START OF PROFILE ADMIN PICTURE */

		#profilePicture {
		    width: 150px; /* Adjust the size as needed */
		    height: 150px; /* Adjust the size as needed */
		    border-radius: 50%;
		    display: block;
		    margin: 0 auto; /* Center the image */
		}

		.change-picture-btn {
		    margin-top: 10px;
		}

		.user-bg {
		    position: relative;
		    overflow: hidden;
		}

		.overlay-box {
		    position: absolute;
		    top: 0;
		    left: 0;
		    width: 100%;
		    height: 100%;
		    background: rgba(0, 0, 0, 0); /* No dark shadow */
		    z-index: 1;
		}

		.white-box {
		    position: relative;
		    z-index: 2;
		}


  /* END OF PROFILE ADMIN PICTURE */

    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/dashboard.css" rel="stylesheet">
  </head>
  <body>
  
	<header class="navbar navbar-success sticky-top bg-success flex-md-nowrap p-0 shadow">
		<a class="navbar col-md-3 col-lg-2 me-0 px-3 text-dark fw-bold" href="#">Company name</a>
		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

	<!-- START OF NOTIFICATION ICON -->

		<div class="navbar-nav ms-auto order-md-last" style="margin-left: 10px; margin-top: 10px;">
		  <div class="nav-item text-nowrap">
		    <div class="notification-bell" style="margin-bottom: 10px;">
		      <span class="bi bi-bell"></span>
		      <span class="notification-count">3</span>
		      <div class="notification-dropdown">
		        <a href="#">Notification 1</a>
		        <a href="#">Notification 2</a>
		        <a href="#">Notification 3</a>
		      </div>
		    </div>
		  </div>
		</div>

		<script>
		  // Add JavaScript for dropdown functionality
		  document.addEventListener("DOMContentLoaded", function () {
		    const bellIcon = document.querySelector(".notification-bell");
		    const dropdown = document.querySelector(".notification-dropdown");

		    bellIcon.addEventListener("click", function () {
		      // Toggle the dropdown visibility
		      dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
		    });

		    // Close the dropdown when clicking outside of it
		    document.addEventListener("click", function (event) {
		      if (!event.target.closest(".notification-bell")) {
		        dropdown.style.display = "none";
		      }
		    });
		  });
		</script>

	<!-- END OF NOTIFICATION ICON -->


  	</header>

	<div class="container-fluid">
  		<div class="row">