<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Argon Dashboard 3</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />

</head>
<body class="bg-dark justify-center gap-y-15" style="height: 100vh;">
    
  {{-- <div class="min-height-300 bg-dark position-absolute w-100 top-0"></div> --}}
    <div class="mb-4">
    <a class="navbar-brand fw-bold text-white" href="/home">
      <i class="ni ni-tv-2 text-primary"></i> Dashboard
    </a>
    </div>

    <div class="mb-5">
        <h1 class="text-white text-center">Create Agency</h1>
    </div>

  
  <main class="main-content d-flex flex-column align-items-center">

    <form class="form-container d-flex flex-column align-items-center gap-4">
        <div class="input-group border-2">
          <span class="input-group-text text-body"><i class="fas fa-user"></i></span>
          <input type="text" class="form-control w-full py-3 px-10 text-lg border-none focus:ring-2 focus:ring-purple-500 placeholder-gray-500" placeholder="Name" name="name">
        </div>
        <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-user-tie"></i></span>
          <input type="text" class="form-control w-full py-3 px-10 text-lg border-none focus:ring-2 focus:ring-purple-500 placeholder-gray-500" placeholder="CEO" name="ceo">
        </div>
        <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-globe"></i></span>
          <input type="text" class="form-control w-full py-3 px-10 text-lg border-none focus:ring-2 focus:ring-purple-500 placeholder-gray-500" placeholder="Website" name="website">
        </div>
        <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-image"></i></span>
          <input type="text" class="form-control w-full py-3 px-10 text-lg border-none focus:ring-2 focus:ring-purple-500placeholder-gray-500" placeholder="Logo" name="logo">
        </div>

        <button class="btn btn-neutral bg-white mt-2 w-50">Submit</button>
       
    </form>

    
    
  </main>
  
</body>
</html>
