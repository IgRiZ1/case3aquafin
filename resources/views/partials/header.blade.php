<nav class="navbar header-bg shadow-sm px-2" style="background:#262a91; color:white;">
    <div class="container-fluid d-flex justify-content-between align-items-center py-2">
        <!-- Logo + homepage -->
        @if (!Request::is('login'))
            <div class="d-flex align-items-center gap-2">
                <a class="navbar-brand d-flex align-items-center p-0 m-0" href="/startpagina">
                    <img src="/images/aquafin.png" alt="Aquafin Logo" style="height:36px;">
                    <span class="text-white fw-semibold fs-5 ms-2">Homepage</span>
                </a>
            </div>
        @endif
        <!-- Winkelmand + login/admin/logout -->
        <div class="d-flex align-items-center gap-2">
            <a href="{{ route('cart.show') }}" class="nav-link d-flex align-items-center me-2" style="color:white;">
                <i class="bi bi-cart cart-icon"></i>
            </a>
            @if(Auth::check() && Auth::user()->is_admin)
                <a href="{{ route('admin.producten.index') }}" class="nav-link fw-semibold me-2" style="color:white;">Admin</a>
            @endif
            @if(Auth::check())
                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="nav-link fw-semibold" style="background:none;border:none;cursor:pointer;color:white;">Logout</button>
                </form>
            @else
                <a href="/login" class="nav-link fw-semibold" style="color:white;">Login</a>
            @endif
        </div>
    </div>
</nav>
