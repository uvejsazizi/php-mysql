<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Platform</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      .navbar-brand {
        font-weight: bold;
        font-size: 1.5rem;
        letter-spacing: 1px;
      }
      .nav-link {
        transition: all 0.3s ease;
      }
      .nav-link:hover {
        color: #0d6efd !important;
        transform: translateY(-2px);
      }
      .btn-signin {
        background: linear-gradient(135deg, #0d6efd, #0dcaf0);
        border: none;
        border-radius: 25px;
        padding: 8px 24px;
        font-weight: 500;
        transition: all 0.3s ease;
      }
      .btn-signin:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(13, 110, 253, 0.4);
      }
    </style>
  </head>
  <body>

  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">

  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <i class="fas fa-rocket"></i> MyApp
    </a>

    <button class="navbar-toggler" type="button" data-mdb-collapse-init
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars text-light"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="signin.php">
            <i class="fas fa-sign-in-alt fa-lg"></i>
            <div>Sign In</div>
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="signup.php">
            <i class="fas fa-user-plus fa-lg"></i>
            <div>Signup</div>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="#!">
            <i class="fas fa-bell fa-lg"></i>
            <span class="badge rounded-pill badge-notification bg-info">3</span>
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="#!">
            <i class="fas fa-envelope fa-lg"></i>
            <span class="badge rounded-pill badge-notification bg-danger">5</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>