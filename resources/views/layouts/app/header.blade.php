<header class="p-3 text-bg-dark mb-3 sticky-top">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><span class="fs-4 display-4 fw-bold lh-1 text-body-emphasis">Blog Laravel</span></li>
            </ul>

            <div class="text-end">
                @if(Auth::check())
                <a href="{{ url('logout') }}" class="btn btn-outline-danger me-2">Logout</a>
                @else
                <a href="{{ url('register') }}" class="btn btn-outline-primary me-2">Register</a>
                <a href="{{ url('login') }}" class="btn btn-outline-light me-2">Login</a>
                @endif
            </div>
        </div>
</header>