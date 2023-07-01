<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('welcome') }}">
      <img src="{{ asset('images/coffee.png') }}" alt="" width="30" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if(auth()->user()->role == "admin")
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('dashboard.admin.blogs') }}">Blogs</a>
        </li>
        @elseif(auth()->user()->role == "super_admin")
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('dashboard.superadmin.category') }}">Category</a>
        </li>
        @endif
      </ul>
      <div class="d-flex">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </li>
          </ul>
        </li>
      </div>
    </div>
  </div>
</nav>