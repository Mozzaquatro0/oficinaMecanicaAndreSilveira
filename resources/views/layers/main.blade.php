<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

{{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
{{-- fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Roboto:wght@100&family=Vina+Sans&display=swap" rel="stylesheet">
{{-- icons --}}
<script src="https://kit.fontawesome.com/c9f5b54e65.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
    

</head>
<div id="navbar">
            {{-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="@yield('navlink')">@yield('nav')</a>
                </li>
            </ul> --}}

            <nav class="navbar navbar-expand-lg bg-warning">
                <div class="container-fluid">
                  <a style="color: aliceblue; font-weight:bold" class="navbar-brand" href="http://localhost:8000">Oficina André Silveira</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <button id="teste" class="btn btn-outline-light">
                          <a id="teste2" class="nav-link" aria-current="page" href="@yield('navlink')">@yield('nav')</a>

                        </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
</div>  


<body>
@yield('body')
</body>
<footer>
@yield('footer')
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>