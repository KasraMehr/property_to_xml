<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>property to xml</title>
    <style>
        body {
            display: grid;
            place-content: center;
            background-color: #062c33;
        }
    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Property XML</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item" style="margin-left: 1rem; margin-right: 1rem;">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item" style="margin-right: 1rem;">
                    <a class="nav-link" href="{{route('add_property_page')}}">Add Property</a>
                </li>
                <li class="nav-item" style="margin-right: 1rem;">
                    <a class="nav-link" href="{{route('home')}}" >Properties</a>
                </li>
                <li class="nav-item" style="margin-right: 1rem;">
                    <a class="nav-link" href="{{route('xml_feed')}}" target="_blank">Generate XML </a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>
</body>




</html>
