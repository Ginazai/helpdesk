<?php



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Serve.ware</title>
    <link rel="icon" type="image/png" sizes="70x70" href="assets/images/icons/icon.png">
    <script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.7.1.min.map"></script>
	  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css.map">
  </head>
  <body>
    <div class="container">
          <header class="lh-1 py-3">
      <div class="row flex-nowrap">
      <div class="col-12 mx-auto text-center">
        <a class="blog-header-logo text-dark" href="index.html" style="font-size: 2.25em;">Serve.ware<img class="mx-2" height="30" width="30" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACTElEQVR4nO2ZsU4bQRCGPzi7pgw0pAqmgrPShTavQBmnSwPvEb8ENJDCRWgcp03JA9AEKFL7EBRgQxNstNJEWll7e2bv1rer+JdWPu3Je/Pvzsx/MwdL/D9oAz+BB+AeGAApkWEbGAPTmaHmWkSEMzG8B7yR0ZO570SETIxe1+Y2ZG5IJGhobqWMj45IA+gAV1pM9ORU1mNwrYaBwDUwMgT7KMRgbxgIqOvPck+l2h+SetXoA7sEhFVgH/itEfgDfBECwQtZUnACi7bHWciuF0wAMXjkIqw2IVskgX/ouwqrTcjGNcRA5iqsmUXI7lg87lyF9cwiZBPgBNj0bz+b8qyJq7C2LMH1JNfq9yuw5oHAmqytP2vsKqwmIduRXTrVdkm54QHQrIBAU9bKtNP/Brz1KazvgV/a7lyKQLriI3ChrXcO7FVhaBkDPlSwISvUAJNLnIobpqLCDzIG4hKzLnoDHFbkopUEaVcL0kdL0njUArnrKWlUljb/WhT5WU5EBXLwuLUoch3C6ows5lJ33jeEYEtdE1oiXrPBfh9iqVuEd8CRlmaPZC5aTGVEj2ldRNoVN5/LEmm72ONcI3sikrra41wjeyLS91GzD2sgkvmo2V2bD65EkjLNcJsiu7aDXkskAT5JfTKtumYflegwzkvERKBUMzyvRjY9aB5CRUTy1u34boa/tomdRySYZnhScEJbwLF271jmik6gNuT5dt7b71VoBObNNhsyegYC6j/BItHyf14zPGgCOpalbmiwCWt0pW4a+lfdJfCIF9JzmAbJezUhAAAAAElFTkSuQmCC"></a>
      </div>
    </div>
    </header>
    </div>

    <nav class="navbar navbar-expand-lg bg-dark" style="min-height:50px;">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="#"><img width="35" height="35" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE20lEQVR4nO2dz48URRTHG5IFokTZJXqUC578A5QfkshZvHrzaMJVIBwkcvViwIsIQQ8cDQshHjm4qxeCIXJwgCWgiQkXDUscGBJ/wMeUU5NMamd6erq76lVXvU8yyWSmOvOqvtNd1fWd96YoFEVRFCUzgLeBs8Bt4Il9mOdfmvek48sGYAm4wmwum7bS8SYNsBPoUZ2fzTHScScLw2/9vCxLx50kwN4Jg/0dsB94wT7M85UJ7d6Sjj85gPPOIP8ELExotwDcdNqek4k6YYC7ziC/W9L2PaftnbDRZgAwcAb5lZK2rzptB2GjzQCg30CQx2GjTRzgJeCBM8iH5rhk3Q4bcdpCnAAeOgM8mtS3TDhmi07qYYUYZ8VuobxoHweAVTbyZtsxZgHVhZiHi9L9SlWIh8BJux1SFdNW97M8CHHCtLXHLFbcQrlk2vr8ImUthIvdJjljNxsf20fPvrZvwwHKRoDtwPEZQvSBT4EdOoaeUCEicejauDR1hWAOZh2HLjMhloI5mDUdupM5CCHiYNZ06JIXQsTBbOjQJS2EiIPZ0KFLVggxB7OhQ/cgVSHEHMyGDl2/SBxCO5gNP3C9SBzgUVAHE1hr4NDdKBIHuBHUwZwyaVV16P4CTqf4q0GG9x6nbR/rjk+tSX0P9R26EevAEWBr0XGArbYvpk8yDqb1FNrgF+B9YFPRMYBNNnbTB1kH056e8zh0vRmBX+uSVwHsszFP41fgVlAHcw6H7hvgZXtqH51xal8EdheRAuy2MU7DrLCO2b7umNHWj4NZ4tB9MWkroGTyi3biZ3bMfwOfT4rZbqWcsWfMk2gdTGAXcAF4PqWT69ZF3CYYo9ne+BD4veQbfhV4o0gFs7IAfijp8G/AB6EnfnP/ANwrieu6WS0VqRLLAFDtC2LOms1F6oxdIv4oGZBvfUz8FS6hj6QvoWI0mfgZLjLO2i2ekYd9x762v83Pyo6Ky8yjdpm5WPGG9ZJdko6W4e5m4DjLwOvS49DFG7G7c3rYpu39kvevTTqblPkn/qaIrOg6DdXu+Of1+NdHlz7p/nUWhpPxZ/bOt66H/RQ4pRN2u8Jcb+Bh/9hmLErx/yC7ly61lCWhmcevWbgeBFlzBlmzcCWhmcevpTU8CLKHjWgWriTU8/g1Czeyn/8veQtIKUYe/1clu7bY98yco3mKgc+Ww8CzMSGe2df0rJACB7FAlCEqSGSgZ0hckKsgsVaSJhJBos5Tz0kQOpCnvjMXQehInvpyRoJcDjY+XakkjZAgXctTP5eBIOeDjk9XKkkjJ0in8tQHGQgyCDo+DT/wzyJ9QfpdylMPVloDAUFEKm039LCDFZ8hoCCilbZbylP3LgwBBImm0naLeerehMEh6UrbNfLUTdtPQpb4wyH5Stt1KknbDn0cQhgcsqm0XaeSdIjqpLQgSHaVtn0WUqaBINkXePYxANQQJHshPF0iXrPlklw+Mu9NOSabAs8hJ9El4Gvg35Jj/rE/phtfZKgQnpaZParTy6nSdutQbY5pC/1bDA93yKvAO7ZAgLkfOAh8P+MYPSM8buYtxLbZmQVM3u7WStvCovQdQbTStrAggwaCaBauB0HWnEHWLFxJ0CzcuECzcOMDzcKNC+o5mJpv6FmURf0v3AihSw6doiiKohT++Q9icYUT76K8UwAAAABJRU5ErkJggg=="></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav w-100 d-flex justify-content-center">
            <li class="nav-item">
              <a class="nav-link active text-light" href="#">Inicio</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Servicios
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Mantenimiento de Software</a></li>
                <li><a class="dropdown-item" href="#">Mantenimiento de Hardware</a></li>
                <li><a class="dropdown-item" href="#">Reparacion de Software</a></li>
                <li><a class="dropdown-item" href="#">Reparacion de Hardware</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Otros</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light" href="#">Contacto</a>
            </li>
            <li class="nav-item ms-auto">
              <button class="btn btn-outline-info float-end" type="submit" data-bs-toggle="modal" data-bs-target="#sign-modal">Registrarse</button>
              <button class="btn btn-outline-info float-end mx-2" type="submit" data-bs-toggle="modal" data-bs-target="#log-modal">Ingresar</button>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- main carousel -->
<div class="container-fluid border border-0 d-flex flex-column p-0">
<div id="carouselExampleIndicators" class="border border-0 carousel slide" data-bs-ride="true">
  <div class="carousel-indicators visually-hidden">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="max-height: 600px;">
    <div class="carousel-item active">
      <img class="w-100" src="assets/images/illustration/slide_1.png" style="height: 600px; width: 100%;">          
    </div>
    <div class="carousel-item" style="height: 600px; width: 100%;">
      <img class="w-100" src="assets/images/illustration/slide_2.png" style="height:600px;">
    </div>
    <div class="carousel-item">
      <img class="w-100" src="assets/images/illustration/slide_3.png" style="height:600px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- buttons -->
<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3 mx-0">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4" style="background-image: url('unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Mantenimiento</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="assets/images/icons/maintenance-white.png" alt="Bootstrap" width="40" height="40">
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>ir</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden rounded-4" style="background-image: url('unsplash-photo-2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-dark text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Reparacion</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="assets/images/icons/repair.png" alt="Bootstrap" width="40" height="40">
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>ir</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4" style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Otros</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="assets/images/icons/other-white.png" alt="Bootstrap" width="40" height="40">
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>ir</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<!-- buttons -->
</div>
<!-- main carousel -->

<!---------------------------------------------- Sign Modal ---------------------------------------------->
<div class="modal fade" id="sign-modal" tabindex="-1" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h1 class="modal-title fs-5 text-white" id="modal-label">Registrate</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                  <div class="container-fluid justify-content-center form-signin">
    <!--------------------------Sign-up Form -------------------------->
    <form class="row g-3 needs-validation" novalidate>

  <div class="col-12 form-floating">
    <input id="inputName" type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" required>
    <label for="inputName">Nombre</label>
  </div>

  <div class="col-12 form-floating">
    <input id="inputLastname" type="text" class="form-control" placeholder="Apellido" aria-label="Apellido">
    <label for="inputLastname">Apellido</label>
  </div>

   <!--  <div class="col-12 form-floating">
      <input id="inputNumeroDeTelefono" type="text" class="form-control" placeholder="Numero de telefono">
      <label for="inputNumeroDeTelefono">Numero de telefono</label>
  </div> -->

  <div class="input-group mb-3">
    <span class="input-group-text" id="phone-desc">+507</span>
    <input type="number" class="form-control" placeholder="Numero de telefono" aria-label="phone number" aria-describedby="phone-desc">
  </div>

    <div class="col-12">
    <select class="form-select">
      <option selected disabled>Provincia</option>
      <option>...</option>
      <option>...</option>
    </select>
  </div>

     <div class="col-12 form-floating">
    <input type="text" class="form-control" id="inputAddress" placeholder="Direccion">
    <label for="inputAddress">Direccion</label>
  </div>
  <div class="col-12 form-floating">
    <input type="text" class="form-control" id="inputAddress2" placeholder="Calle">
    <label for="inputAddress2">Calle, avenida, apartamento...</label>
  </div>

  <div class="col-12 form-floating">
    <textarea maxlength="140" class="form-control" placeholder="detalles" id="input-details"></textarea>
    <label for="input-details">Detalles adicionales</label>
  </div>

  <div class="col-12 form-floating">
    <input type="email" class="form-control" placeholder="correo@ejemplo.com" id="inputEmail">
    <label for="inputEmail">Correo electronico</label>
  </div>

  <div class="col-12 form-floating">
    <input type="email" class="form-control" placeholder="correo@ejemplo.com" id="email-confirm">
    <label for="email-confirm">Confirme su correo electronico</label>
  </div>

  <div class="col-12 form-floating">
    <input type="password" class="form-control" placeholder="Contraseña" id="inputPassword">
    <label for="inputPassword">Cree una contraseña</label>
  </div>
</form>

<!--------------------------Sign-up Form -------------------------->
  </div>
      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-info">Registrarse</button>
      </div>
    </div>
  </div>
</div>
<!---------------------------------------------- Sign Modal ---------------------------------------------->

<!---------------------------------------------- Log in Modal ---------------------------------------------->
<div class="modal fade" id="log-modal" tabindex="-1" aria-labelledby="label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h1 class="modal-title fs-5 text-white" id="label">Ingresar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <div class="form-signin justify-content-center container-fluid">
      <form class="row g-3">

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Correo electronico</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordarme</label>
    </div>
    <p>
      <a>olvidaste tu contraseña?</a>
    </p>
  </form>
    </div>
      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-info">Ingresar</button>
      </div>
    </div>
  </div>
</div>
<!---------------------------------------------- Log in Modal ---------------------------------------------->

<!------------------------------------------------ Resources ------------------------------------------------>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js.map"></script>
  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js.map"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
  <script type="text/javascript" src="assets/js/script.js"></script>
 <!------------------------------------------------ Resources ------------------------------------------------>
  </body>
</html>
