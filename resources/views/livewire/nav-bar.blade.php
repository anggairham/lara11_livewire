<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            @guest
                <li class="nav-item active">
                    <a class="nav-link" wire:navigate href="/login">Login</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" wire:navigate href="/register">Register</a>
                </li>
            @endguest
            @auth
                <li class="nav-item active">
                    <a class="nav-link" wire:navigate href="/customers">Customers</a>
                </li>
                <li class="nav-item active">
                    <button class="nav-link" wire:click="logout">logout</button>
                </li>
            @endauth
        </ul>
    </div>
</nav>
