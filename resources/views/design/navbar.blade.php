<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-commerce</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  
<nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">Booking app</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">Booking app</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="#"><b class="color">Home</b></a></li>
          <li>
            <a href="{{ route('hotels.index') }}"><b class="color">Hotel</b></a>
            
          </li>
          <li>
            <a href="{{ route('reservations.index') }}"><b class="color"> Reservations</b></a>
          </li>
          <li>
          <a href="{{ route('internautes.index') }}"><b class="color"> Internautes</b></a>
          </li>            
      </div>

      

    </div>
  </nav>
</body>
</html>