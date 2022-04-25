<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid"  style="background-color: green;">
    <a class="navbar-brand" href="#">
      <img src="../image/logop2.jpg" style="height: 10vh;" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" style=" margin-right: 35px; margin-left: 20px; text-align: center;">
          <a class="nav-link" style="color: black; font-size: 20px;width: 200px;" href="../index.php">
            <button type="button" class="btn btn-outline-light" style="width: 100%; height: 40px;">ACCUEIL</button>
          </a>
        </li>
        <li class="nav-item" style=" height: 60px; margin-right: 35px;margin-left: 20px; text-align: center;">
          <a class="nav-link" style="color: black; font-size: 20px; width: 200px;" href="ajouter_pat.php">
            <button type="button" class="btn btn-outline-light" style="width: 100%; height: 40px; font-family: arial;">AJOUTER</button>
          </a>
        </li>
        <li class="nav-item" style=" height: 60px; margin-right: 35px;margin-left: 20px; text-align: center;">
          <a class="nav-link" style="color: black; font-size: 20px; width: 200px;" href="liste_pat.php">
            <button type="button" class="btn btn-outline-light" style="width: 100%; height: 40px; ">LISTE</button>
          </a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" id="myInput" onkeyup="myFunction()" type="search" aria-label="Search" placeholder="recherche">
        <button class="btn btn-outline-light" style="background-color: red;" type="submit">Rechercher</button>
       </form>
    </div>
  </div>
</nav>