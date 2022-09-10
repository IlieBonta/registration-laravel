<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-light text-md-center "><h3>Little Vincent's Pizza</h3></a></li>
                <li><a href="{{ route('about') }}" class="nav-link m-lg-2 px-2 text-white text-md-center">About</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link m-lg-2 px-2 text-white text-md-center">Contact Us</a></li>
                <li><a href="{{ route('contact-data') }}" class="nav-link m-lg-2 px-2 text-white text-md-center">Messages</a></li>
                <li><a href="/" class="nav-link px-2 text-white m-lg-2 text-md-center">Yor Basket</a></li>
            </ul>
            {{--добавил библиотеку с иконками и добавил значек поиска--}}
            <ion-icon class="p-3" name="search-outline"></ion-icon>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..."
                       aria-label="Search">
            </form>

            <div class="text-end">
                <a href="{{ route('home') }}">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                </a>
                <a href="{{ route('register') }}">
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </a>
            </div>
        </div>
    </div>
</header>
