<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">Winery Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Wines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/add-wine') }}">Add Wine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/producers') }}">Producers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/add-producer') }}">Add Producer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/awards') }}">Awards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/add-award') }}">Add Award</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
