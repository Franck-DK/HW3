<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .navbar-custom {
        background-color: #343a40;
      }
      .navbar-custom .navbar-brand {
        font-weight: bold;
        color: #ffffff;
      }
      .navbar-custom .nav-link {
        color: #ffffff !important;
        transition: color 0.3s ease;
      }
      .navbar-custom .nav-link:hover {
        color: #f8d210 !important;
      }
      .navbar-custom .nav-item.active .nav-link {
        color: #f8d210 !important;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-custom w-100">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">AUTO-TRACK-BASE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/" id="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php" id="cars">Cars</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="stores.php" id="dealerships">Dealerships</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customers.php" id="customers">Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="productswithstores.php" id="inventory">Inventory</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products-chart.php" id="carsChart">Cars Chart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      <h1 class="text-center">Welcome to AUTO-TRACK Car Dealership Management</h1>
      <!-- Page Content Here -->
    </div>

    <script>
      // Highlight the active tab based on the current URL
      const currentPage = window.location.pathname.split("/").pop();
      document.querySelectorAll(".nav-link").forEach(link => {
        if(link.getAttribute("href") === currentPage) {
          link.parentElement.classList.add("active");
        } else {
          link.parentElement.classList.remove("active");
        }
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


