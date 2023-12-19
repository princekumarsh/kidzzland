<div class="bg-pink h25" >
    <div class="container-fluid">
        <div class="d-flex">
            <span class="float-right"><a></a></span>
            <span class="float-right ng-hide"></a></span>
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="p5 menuitem">24x7 Customer care</div>
            <div class="p5"></div>
            <div class="p5 menuitem"><a href="{{route('order')}}" style="color:white;">Sign in</a></div>
        </div>
    </div>
</div>

<div class="navbar bg-pink navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid h36">
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="https://static.hopscotch.in/web2/images/hopscotch_typeface.a77f73a420824394a16def75d569c2fd.svg"
                        alt="Bootstrap" width="100" height="48">
                </a>
            </div>
        </nav>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="padding-right: 0px;padding-left: 0px;border-left-width: 0px;border-left-style: solid;padding-top: 0px;border-bottom-width: 0px;border-bottom-style: solid;padding-bottom: 0px;border-right-width: 0px;border-right-style: solid;border-top-width: 0px;border-top-style: solid;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background: rgb(237, 84, 164);margin-top:-15px;">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item  plr10">
                    <a class="nav-link active menuitem" aria-current="page" href="#">Discover</a>
                </li>
                <li class="nav-item dropdown  plr10">
                    <a class="nav-link dropdown-toggle menuitem " href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        All
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">All</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Girls</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Boys</a></li>
                    </ul>
                </li>
                <li class="nav-item  plr10">
                    <a class="nav-link menuitem" href="{{route('moments')}}">Moments</a>
                </li>

                <li class="nav-item  plr10">
                    <a class="nav-link menuitem" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item  plr10">
                    <a class="nav-link menuitem" href="{{route('blog1')}}">Blog1</a>
                </li>
            </ul>
            <form class="d-flex plr10" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" style="color:white;border-color:white;" type="submit">Search</button>
            </form>
            <div class="cart-button">
                {{-- <i class="fa-solid fa-cart-shopping"></i> --}}
                <a href="{{route('cart')}}">
                    <i class="fa-solid cart-icon fa-cart-plus">
                    </i>
                </a>
            </div>
        </div>
    </div>
</div>
