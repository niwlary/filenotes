<nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
        <div class="row col-6 w-25 order-1"> @include('components.application-logo') </div>
        <span style="color: rgb(44, 0, 125); letter-spacing: 2px;" class="order-2"> <h1 class="text-shadow fw-bold text-center order-2"></h1> </span>
        <div class="d-flex justify-content-end order-3">
            <a class="dropdown-toggle btn btn-outline-success rounded" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                @yield('header_dropdown_li')
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="dropdown-item" type="submit">Sair</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
