<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>ADMINISTRATOR LOGIN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../assets/css/signin.css" rel="stylesheet">

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

        body {
            background: url('../assets/images/bgimage.png') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            width: 300px; /* Adjust the width as needed */
            height: auto;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="../assets/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">
    <main class="form-signin">

    <div class="card" style="padding: 20px;">
      <form>

        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" width="50" height="50"><defs><linearGradient id="New_Gradient_Swatch_1" x1="256" x2="256" y2="512" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ededee"/><stop offset="0.76" stop-color="#cfd0d2"/><stop offset="1" stop-color="#a6a8ab"/></linearGradient><linearGradient id="New_Gradient_Swatch_2" x1="256" y1="419.47" x2="256" y2="92.54" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#231f20"/><stop offset="1" stop-color="#6d6e70"/></linearGradient></defs><title>user</title><path d="M256,512c141,0,256-115,256-256S397,0,256,0,0,115,0,256,115,512,256,512Z" fill-rule="evenodd" fill="url(#New_Gradient_Swatch_1)"/><path d="M244.48,92.54a74.83,74.83,0,0,1,40,138,118.57,118.57,0,0,1,78.28,111.57c0,65.45-52.94,77.4-118.23,77.4s-118.23-12-118.23-77.4a118.57,118.57,0,0,1,78.29-111.57,74.82,74.82,0,0,1,39.94-138Z" fill="#fff" fill-rule="evenodd"/><path d="M256,92.54a74.83,74.83,0,0,1,40,138,118.58,118.58,0,0,1,78.28,111.57c0,65.45-52.94,77.4-118.23,77.4s-118.23-12-118.23-77.4a118.57,118.57,0,0,1,78.29-111.57A74.82,74.82,0,0,1,256,92.54Z" fill-rule="evenodd" fill="url(#New_Gradient_Swatch_2)"/></svg>

        <h1 class="h3 mb-3 fw-normal">ADMIN LOGIN</h1>

        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="admin@gmail.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      </form>

    </div>
    </main>
</body>
</html>
