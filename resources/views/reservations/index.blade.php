<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Réservations</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
<div class="container mt-5" style="padding-top:130px;">
    <h1>Liste des Réservations</h1>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a href="{{ route('reservations.create') }}" class="btn btn-primary">Ajouter un Réservations</a>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Internaute</th>
                <th>Hôtel</th>
                <th>Date de Début</th>
                <th>Date de Fin</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->internaute->nom }}</td>
                <td>{{ $reservation->hotel->titre }}</td>
                <td>{{ $reservation->date_debut_sejour }}</td>
                <td>{{ $reservation->date_fin_sejour }}</td>
                <td>{{ $reservation->titre }}</td>
                <td>
                    <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-info btn-sm">Voir</a>
                    <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<style>
    /* Googlefont Poppins CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

/* Universal Styles */
*,
*:before,
*:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}

body {
  min-height: 100vh;
}

.lslide {
  color: black;
  transition: color 0.3s; 
}

.lslide:hover {
  color: #61CE70; 
}

.logo {
  display: block;
  margin: 0 auto;
}

.headre {
  background-color: rgb(238, 238, 238);
  border: 1px solid #abb8c3;
  height: 60px;
}

.headre2 {
  background-color: black;
  height: 130px;
}

.color {
  color: black;
}

.color:hover {
  color: #00ca1e;
}

.pictures {
  width: 100%;
  height: 700px;
}

@media (max-width: 700px) {
  .pictures {
    height: 400px;
  }
}

/* Navbar Styles */
nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 70px;
  background: #558063;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  z-index: 99;
}

nav .navbar {
  height: 100%;
  max-width: 1250px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: auto;
  padding: 0 50px;
}

.navbar .logo a {
  font-size: 30px;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
}

.navbar .nav-links {
  line-height: 70px;
  height: 100%;
}

.navbar .links {
  display: flex;
}

.navbar .links li {
  position: relative;
  display: flex;
  align-items: center;
  list-style: none;
  padding: 0 14px;
}

.navbar .links li a {
  height: 100%;
  text-decoration: none;
  white-space: nowrap;
  color: #fff;
  font-size: 15px;
  font-weight: 500;
}

.navbar .links li:hover .htmlcss-arrow,
.navbar .links li:hover .js-arrow {
  transform: rotate(180deg);
}

.navbar .links li .arrow {
  height: 100%;
  width: 22px;
  text-align: center;
  color: #fff;
  transition: all 0.3s ease;
}

.navbar .links li .sub-menu {
  position: absolute;
  top: 70px;
  left: 0;
  line-height: 40px;
  background: #558063;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  border-radius: 0 0 4px 4px;
  display: none;
  z-index: 2;
}

.navbar .links li:hover .htmlCss-sub-menu,
.navbar .links li:hover .js-sub-menu {
  display: block;
}

.navbar .links li .sub-menu li {
  padding: 0 22px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.navbar .links li .sub-menu a {
  color: #000;
  font-size: 15px;
  font-weight: 500;
}

.navbar .links li .sub-menu a:hover {
  color: #00ca1e;
}

.navbar .links li .sub-menu .more-sub-menu {
  position: absolute;
  top: 0;
  left: 100%;
  border-radius: 0 4px 4px 4px;
  display: none; 
}

.links li .sub-menu .more:hover .more-sub-menu {
  display: block;
}

.navbar .search-box {
  position: relative;
  height: 40px;
  width: 40px;
}

.navbar .search-box i {
  position: absolute;
  height: 100%;
  width: 100%;
  line-height: 40px;
  text-align: center;
  font-size: 22px;
  color: #fff;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

.navbar .search-box .input-box {
  position: absolute;
  right: calc(100% - 40px);
  top: 80px;
  height: 60px;
  width: 300px;
  background: #558063;
  border-radius: 6px;
  opacity: 0;
  pointer-events: none;
  transition: all 0.4s ease;
}

.navbar.showInput .search-box .input-box {
  top: 65px;
  opacity: 1;
  pointer-events: auto;
  background: #558063;
}

.search-box .input-box::before {
  content: '';
  position: absolute;
  height: 20px;
  width: 20px;
  background: #558063;
  right: 10px;
  top: -6px;
  transform: rotate(45deg);
}

.search-box .input-box input {
  position: absolute;
  top: 50%;
  left: 50%;
  border-radius: 4px;
  transform: translate(-50%, -50%);
  height: 35px;
  width: 280px;
  outline: none;
  padding: 0 15px;
  font-size: 16px;
  border: none;
}

.navbar .nav-links .sidebar-logo {
  display: none;
}

.navbar .bx-menu {
  display: none;
}

@media (max-width: 920px) {
  nav .navbar {
    max-width: 100%;
    padding: 0 25px;
  }

  nav .navbar .logo a {
    font-size: 27px;
  }

  nav .navbar .links li {
    padding: 0 10px;
    white-space: nowrap;
  }

  nav .navbar .links li a {
    font-size: 15px;
  }
}

@media (max-width: 800px) {
  nav .navbar .bx-menu {
    display: block;
  }

  nav .navbar .nav-links {
    position: fixed;
    top: 0;
    left: -100%;
    max-width: 340px;
    width: 100%;
    background: #558063;
    line-height: 40px;
    padding: 20px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    transition: all 0.5s ease;
    z-index: 1000;
  }

  nav .navbar .nav-links .sidebar-logo {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .sidebar-logo .logo-name,
  .sidebar-logo i,
  .navbar .bx-menu {
    font-size: 25px;
    color: #000;
  }

  nav .navbar .links {
    display: block;
    margin-top: 20px;
  }

  nav .navbar .links li .arrow {
    line-height: 40px;
  }

  nav .navbar .links li {
    display: block;
  }

  nav .navbar .links li .sub-menu {
    position: relative;
    top: 0;
    box-shadow: none;
    display: none;
  }

  nav .navbar .links li .sub-menu li {
    border-bottom: none;
  }

  .links li:hover .htmlcss-arrow,
  .links li:hover .js-arrow {
    transform: rotate(0deg);
  }

  .navbar .links li .sub-menu .more-sub-menu {
    display: none;
    position: relative;
    left: 0;
  }

  .navbar .links li .sub-menu .more-sub-menu li {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .links li .sub-menu .more:hover .more-sub-menu {
    display: none;
  }

  nav .navbar .links li:hover .htmlCss-sub-menu,
  nav .navbar .links li:hover .js-sub-menu {
    display: none;
  }

  .navbar .nav-links.show1 .links .htmlCss-sub-menu,
  .navbar .nav-links.show3 .links .js-sub-menu,
  .navbar .nav-links.show2 .links .more .more-sub-menu {
    display: block;
  }

  .navbar .nav-links.show1 .links .htmlcss-arrow,
  .navbar .nav-links.show3 .links .js-arrow {
    transform: rotate(180deg);
  }

  .navbar .nav-links.show2 .links .more-arrow {
    transform: rotate(90deg);
  }
}

@media (max-width: 370px) {
  nav .navbar .nav-links {
    max-width: 100%;
  }
}

/* Content Scroller */
.c14whb16[class][class] {
  contain: var(--contentscroller_contain);
  display: grid;
  grid-auto-flow: column;
  grid-auto-columns: var(--contentscroller_auto-columns, calc((100% - var(--contentscroller_gap, 16px) * (var(--contentscroller_visible-items, unset) - 1)) / var(--contentscroller_visible-items, unset)));
  gap: var(--contentscroller_gap, 16px);
  grid-template-rows: var(--contentscroller_rows, none);
  grid-template-areas: var(--contentscroller_areas, none);
  justify-content: flex-start;
  min-height: var(--contentscroller_min-height);
  height: var(--contentscroller_height);
  overflow: var(--contentscroller_overflow, auto hidden);
  overscroll-behavior-inline: contain;
  padding-block-start: var(--contentscroller_padding-block-start, unset);
  padding-block-end: var(--contentscroller_padding-block-end, unset);
  scroll-padding-inline: var(--contentscroller_peek, 32px);
  scrollbar-width: none;
}

.c14whb16[class][class]::-webkit-scrollbar {
  display: none;
}

.w17rkehr[class][class] {
  --chipsbar_height: 74px;
  --chipsbar_chip-spacing: 29px;
  --contentscroller_auto-columns: max-content;
  padding: 20px;
}

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
