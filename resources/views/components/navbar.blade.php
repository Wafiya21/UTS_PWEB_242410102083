<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('beranda') }}">Welcome!</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('beranda') }}">beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('kelola.produk') }}">Kelola Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profile User</a></li>
      </ul>
    </div>
  </div>
</nav>
