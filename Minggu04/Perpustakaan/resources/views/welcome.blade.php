<!doctype html>
<html lang="en">
  <head>
    <title>PerpusKu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container">
              <img = src="assets/logo_polije.png" width="60" height="60" alt="">
              <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="collapsibleNavId">
                  <ul class="navbar-nav me-auto mt-7 mt-lg-8">
                      <li class="nav-item active">
                          <a class="nav-link" href="#">Beranda <span class="visually-hidden">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Tentang</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                  </ul>
              </div>
        </div>
      </nav>
      <div class="p-5 bg-light">
          <div class="container">
              <h1 class="display-3">Sistem Informasi Laboratorium</h1>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, repellat dolor. Itaque magnam nostrum neque aliquam pariatur reprehenderit ab, ratione vero dolorum tenetur inventore, a saepe molestiae officia, tempora nemo?</p>
              <hr class="my-2">
              <br>
              <br>
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <a href="{{route('Auth.login')}}"><button type="button" class="btn btn-warning">Login Anggota</button>
                <a href="{{route('Auth.login')}}"><button type="button" class="btn btn-success">Login Petugas</button>
              </div>

          </div>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
