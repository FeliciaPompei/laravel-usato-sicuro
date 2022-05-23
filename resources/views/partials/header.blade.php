<header class="my-header-bg-color">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                    <img class="my-img-size me-2" src="{{asset('images/Usato Sicuro.jpg')}} " alt="Car Logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}} ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cars.index')}} ">Cars</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
