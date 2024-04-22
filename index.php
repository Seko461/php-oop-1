<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/db.php';

?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar  navbar-expand-sm navbar-dark bg-dark">
          <div class="container  text-white">
            <a class="navbar-brand" href="#">Navbar</a>
           
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
    
  </header>
  <main >

<div class="container text-center my-3" >
    <h2>Productions</h2>
 <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 m-3 g-3">

    <?php foreach ($productions as $production) : ?>
        <div class="col">
            <div class="card h-100">
                <div class="card-header  d-flex">
                    <h4 class="text-danger-emphasis text-capitalize mx-auto"><?= $production->title ?></h4>
                </div>
                <div class="card-body text-start">
                    <h6><span>Language: </span><?= $production->language ?></h6>
                    <h6><span>Vote: </span><?= $rand_vote ?></h6>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
 </div>
 </div>
  </main>
  <footer>
    <!-- place footer here -->
<div class="bg-dark d-flex flex-row justify-content-around py-3 fixed-bottom">
    <ul class="list-unstyled text-white ">
        <li>Lorem.</li>
        <li>Suscipit!</li>
        <li>Nesciunt!</li>
    </ul>
     <ul class="list-unstyled text-white ">
        <li>Lorem.</li>
        <li>Suscipit!</li>
        <li>Nesciunt!</li>
    </ul>
     <ul class="list-unstyled text-white ">
        <li>Lorem.</li>
        <li>Suscipit!</li>
        <li>Nesciunt!</li>
    </ul>
</div>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>






