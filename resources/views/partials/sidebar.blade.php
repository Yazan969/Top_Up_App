<!-- resources/views/partials/sidebar.blade.php -->
<nav id="sidebar" class="bg-dark fixed-top" style="width: 250px; height: 100vh;">
    <div class="position-sticky">
        <div class="text-center p-4">
            <h4 class="text-white">TopUp Game</h4>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }} text-white" href="{{ route('dashboardAdmin') }}">
                    <i class="fas fa-home me-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('games.*') ? 'active' : '' }} text-white" href="{{ route('games.index') }}">
                    <i class="fas fa-gamepad me-2"></i>
                    Daftar Game
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('transactions.*') ? 'active' : '' }} text-white" href="{{ route('transactions.index') }}">
                    <i class="fas fa-exchange-alt me-2"></i>
                    Transaksi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('customers.*') ? 'active' : '' }} text-white" href="{{ route('customers.index') }}">
                    <i class="fas fa-users me-2"></i>
                    Pelanggan
                </a>
            </li>
            <li class="nav-item mt-3">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt me-2"></i>
                        Logout
                    </a>
                </form>
            </li>
        </ul>
    </div>
</nav>