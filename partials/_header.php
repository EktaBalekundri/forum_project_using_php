<?php
echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">iDiscuss</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/forum/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
      </li>
    </ul>
    <div class="row mx-3">
        
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class="btn btn-outline-success ml-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
    <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">Sigup</button>
    </div>

  </div>
</nav>';

include 'partials/_loginModal.php';


include 'partials/_signupModal.php';
?>