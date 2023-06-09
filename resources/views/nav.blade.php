
<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">


        <!-- Brand -->
        <a class="navbar-brand ms-5" href="#">
            <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt=""
                loading="lazy" />
        </a>
        <!-- Search form -->
        {{-- <form class="d-none d-md-flex input-group w-auto my-auto">
            <input autocomplete="off" type="search" class="form-control rounded"
                placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
        </form> --}}

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
            <!-- Notification dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#"
                    id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                    <div class="badge rounded-pill badge-notification bg-danger">1</div>
                </a>
                {{-- <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Some news</a></li>
                    <li><a class="dropdown-item" href="#">Another news</a></li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul> --}}
            </li>

            <!-- Icon -->
            <li class="nav-item">
                <a class="nav-link me-3 me-lg-0" href="#">
                    <i class="fas fa-fill-drip"></i>
                </a>
            </li>
            <!-- Icon -->
            <li class="nav-item me-3 me-lg-0">
                <a class="nav-link" href="#">
                    <i class="fa fa-github" aria-hidden="true"></i>
                </a>
            </li>

            <!-- Avatar -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                    id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
                        height="22" alt="" loading="lazy" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">My profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
