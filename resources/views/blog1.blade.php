@extends('layouts.front-end.app')
@section('content')

<style>
    body{
    color: #707070 !important;
    font-family: Averta,Helvetica,Arial,sans-serif;
    }
    @media only screen and (min-width: 600px){
        .mlr {
            margin-left: 235px;
            margin-right: 235px;
        }
    }
    .fs-16{
        font-size: 16px;
    }
    .tile-img{
        max-width: 279px;
    }
    .white{
        color:white;
    }
    .btn:hover {
        color: white;
        background-color: #ED54A4;
        border-color: #707070;
        box-shadow: 0 0 11px rgba(33,33,33,.2);
    }
    .card{
        transition: .3s;
        background-color: #fff;
        border-radius: 25px 25px 25px 25px;
        box-shadow: 6px 0 10px 0 rgba(0,0,0,.16);
    }
    .card:hover{
        transition: .3s;
        background-color: #fff;
        transform: scale(1.02);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        /* box-shadow: 8px 8px 8px #ed54a4; */
    }
    .br25{
        border-top-right-radius: 25px;
        border-top-left-radius: 25px;
        background: cover
    }
    .carousel-control-next-icon {
        background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e);
        background-color: #ed54a4;
    }
    .carousel-control-prev-icon {
        background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e);
        background-color: #ed54a4;
    }
    .ml-40{
        margin-left:40px
    }
    .row>*{
        padding-left:0;
        padding-right:0;
    }
    .fs-12{
        font-size: 12px
    }
    .card-text.stretched-link{
        color: #707070 !important;
    }
    .stretched-link{
        color: #ED54A4 !important;
    }


</style>



<div class="container mlr mt-4" style="max-width: -webkit-fill-available;">
    <h1 class="text-center">Welcome to our Blog</h1>
    <div class="row">
        <a class="btn btn-lg bg-pink white" style="width: 140px">Fashion</a>
    </div>
    <br>
    <div class="row">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item ">
                <div class="row ml-40">
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Republic-featured-2-768x641.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Let your little ones show patriotism</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Deshbhakt 10 aug ,2023</span></div>
                        <br>
                        <p class="card-text">Your child will look like a true india</p>
                        <a href="{{route('blogDetails')}}" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Republic-featured-2-768x641.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Let your little ones show patriotism</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Deshbhakt 10 aug ,2023</span></div>
                        <br>
                        <p class="card-text">Your child will look like a true india</p>
                        <a href="{{route('blogDetails')}}" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Republic-featured-2-768x641.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Let your little ones show patriotism</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Deshbhakt 10 aug ,2023</span></div>
                        <br>
                        <p class="card-text">Your child will look like a true india</p>
                        <a href="{{route('blogDetails')}}" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>

                </div>
              </div>
              <div class="carousel-item">
                <div class="row ml-40">
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/02/shutterstock_601323392.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Fashion Fridays: Nautical trend for the win!</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Fiona Buksh February 7, 2020</span></div>
                        <br>
                        <p class="card-text">We sailed the seas for this Fashion Friday trend!</p>
                        <a href="{{route('blogDetails')}}" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/02/shutterstock_601323392.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Fashion Fridays: Nautical trend for the win!</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Fiona Buksh February 7, 2020</span></div>
                        <br>
                        <p class="card-text">We sailed the seas for this Fashion Friday trend!</p>
                        <a href="{{route('blogDetails')}}" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/02/shutterstock_601323392.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Fashion Fridays: Nautical trend for the win!</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Fiona Buksh February 7, 2020</span></div>
                        <br>
                        <p class="card-text">We sailed the seas for this Fashion Friday trend!</p>
                        <a href="{{route('blogDetails')}}" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item active">
                    <div class="row ml-40">
                        <div class="card m-2" style="width: 16rem;">
                            <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Fashion-Friday-Monochromatic-Outfits-for-Kids_Featured.jpg.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title pink">I discovered a whole range of.....</h5>
                            <div class="fs-12"> Posted by:    <span class=" pink">Priya priya 3 nov ,2023</span></div>
                            <br>
                            <p class="card-text">We sailed the seas for this fashion friday trend!</p>
                            <a href="{{route('blogDetails')}}" class="stretched-link pink">Full read >></a>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 16rem;">
                            <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Fashion-Friday-Monochromatic-Outfits-for-Kids_Featured.jpg.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title pink">I discovered a whole range of.....</h5>
                            <div class="fs-12"> Posted by:    <span class=" pink">Priya priya 3 nov ,2023</span></div>
                            <br>
                            <p class="card-text">We sailed the seas for this fashion friday trend!</p>
                            <a href="{{route('blogDetails')}}" class="stretched-link pink">Full read >></a>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 16rem;">
                            <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Fashion-Friday-Monochromatic-Outfits-for-Kids_Featured.jpg.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title pink">I discovered a whole range of.....</h5>
                            <div class="fs-12"> Posted by:    <span class=" pink">Priya priya 3 nov ,2023</span></div>
                            <br>
                            <p class="card-text">We sailed the seas for this fashion friday trend!</p>
                            <a href="{{route('blogDetails')}}" class="stretched-link pink">Full read >></a>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- 2nd section --}}
    <hr>
    <br>
    <div class="row">
        <a class="btn btn-lg bg-pink white" style="width: 140px">Lifestyle</a>
    </div>
    <br>
    <div class="row">
        <div id="carouselExample1" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row ml-40">
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Republic-featured-2-768x641.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Let your little ones show patriotism</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Deshbhakt 10 aug ,2023</span></div>
                        <br>
                        <p class="card-text">Your child will look like a true india</p>
                        <a href="#" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Republic-featured-2-768x641.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Let your little ones show patriotism</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Deshbhakt 10 aug ,2023</span></div>
                        <br>
                        <p class="card-text">Your child will look like a true india</p>
                        <a href="#" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Republic-featured-2-768x641.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Let your little ones show patriotism</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Deshbhakt 10 aug ,2023</span></div>
                        <br>
                        <p class="card-text">Your child will look like a true india</p>
                        <a href="#" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>

                </div>
              </div>
              <div class="carousel-item">
                <div class="row ml-40">
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/02/shutterstock_601323392.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Fashion Fridays: Nautical trend for the win!</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Fiona Buksh February 7, 2020</span></div>
                        <br>
                        <p class="card-text">We sailed the seas for this Fashion Friday trend!</p>
                        <a href="#" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/02/shutterstock_601323392.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Fashion Fridays: Nautical trend for the win!</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Fiona Buksh February 7, 2020</span></div>
                        <br>
                        <p class="card-text">We sailed the seas for this Fashion Friday trend!</p>
                        <a href="#" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/02/shutterstock_601323392.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Fashion Fridays: Nautical trend for the win!</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Fiona Buksh February 7, 2020</span></div>
                        <br>
                        <p class="card-text">We sailed the seas for this Fashion Friday trend!</p>
                        <a href="#" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                    <div class="row ml-40">
                        <div class="card m-2" style="width: 16rem;">
                            <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Fashion-Friday-Monochromatic-Outfits-for-Kids_Featured.jpg.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title pink">I discovered a whole range of.....</h5>
                            <div class="fs-12"> Posted by:    <span class=" pink">Priya priya 3 nov ,2023</span></div>
                            <br>
                            <p class="card-text">We sailed the seas for this fashion friday trend!</p>
                            <a href="#" class="stretched-link pink">Full read >></a>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 16rem;">
                            <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Fashion-Friday-Monochromatic-Outfits-for-Kids_Featured.jpg.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title pink">I discovered a whole range of.....</h5>
                            <div class="fs-12"> Posted by:    <span class=" pink">Priya priya 3 nov ,2023</span></div>
                            <br>
                            <p class="card-text">We sailed the seas for this fashion friday trend!</p>
                            <a href="#" class="stretched-link pink">Full read >></a>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 16rem;">
                            <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Fashion-Friday-Monochromatic-Outfits-for-Kids_Featured.jpg.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title pink">I discovered a whole range of.....</h5>
                            <div class="fs-12"> Posted by:    <span class=" pink">Priya priya 3 nov ,2023</span></div>
                            <br>
                            <p class="card-text">We sailed the seas for this fashion friday trend!</p>
                            <a href="#" class="stretched-link pink">Full read >></a>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- 3rd --}}
    <hr>
    <br>
    <div class="row">
        <a class="btn btn-lg bg-pink white" style="width: 140px">Travel</a>
    </div>
    <br>
    <div class="row">
        <div id="carouselExample2" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item ">
                <div class="row ml-40">
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Republic-featured-2-768x641.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Let your little ones show patriotism</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Deshbhakt 10 aug ,2023</span></div>
                        <br>
                        <p class="card-text">Your child will look like a true india</p>
                        <a href="#" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Republic-featured-2-768x641.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Let your little ones show patriotism</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Deshbhakt 10 aug ,2023</span></div>
                        <br>
                        <p class="card-text">Your child will look like a true india</p>
                        <a href="#" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Republic-featured-2-768x641.jpg.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Let your little ones show patriotism</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Deshbhakt 10 aug ,2023</span></div>
                        <br>
                        <p class="card-text">Your child will look like a true india</p>
                        <a href="#" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>

                </div>
              </div>
              <div class="carousel-item active">
                <div class="row ml-40">
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/02/shutterstock_601323392.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Fashion Fridays: Nautical trend for the win!</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Fiona Buksh February 7, 2020</span></div>
                        <br>
                        <p class="card-text">We sailed the seas for this Fashion Friday trend!</p>
                        <a href="#" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/02/shutterstock_601323392.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Fashion Fridays: Nautical trend for the win!</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Fiona Buksh February 7, 2020</span></div>
                        <br>
                        <p class="card-text">We sailed the seas for this Fashion Friday trend!</p>
                        <a href="#" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 16rem;">
                        <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/02/shutterstock_601323392.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title pink">Fashion Fridays: Nautical trend for the win!</h5>
                        <div class="fs-12"> Posted by:    <span class=" pink">Fiona Buksh February 7, 2020</span></div>
                        <br>
                        <p class="card-text">We sailed the seas for this Fashion Friday trend!</p>
                        <a href="#" class="stretched-link pink">Full read >></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                    <div class="row ml-40">
                        <div class="card m-2" style="width: 16rem;">
                            <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Fashion-Friday-Monochromatic-Outfits-for-Kids_Featured.jpg.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title pink">I discovered a whole range of.....</h5>
                            <div class="fs-12"> Posted by:    <span class=" pink">Priya priya 3 nov ,2023</span></div>
                            <br>
                            <p class="card-text">We sailed the seas for this fashion friday trend!</p>
                            <a href="#" class="stretched-link pink">Full read >></a>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 16rem;">
                            <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Fashion-Friday-Monochromatic-Outfits-for-Kids_Featured.jpg.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title pink">I discovered a whole range of.....</h5>
                            <div class="fs-12"> Posted by:    <span class=" pink">Priya priya 3 nov ,2023</span></div>
                            <br>
                            <p class="card-text">We sailed the seas for this fashion friday trend!</p>
                            <a href="#" class="stretched-link pink">Full read >></a>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 16rem;">
                            <img class="br25" src="https://www.hopscotch.in/blog/wp-content/uploads/2020/01/Fashion-Friday-Monochromatic-Outfits-for-Kids_Featured.jpg.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title pink">I discovered a whole range of.....</h5>
                            <div class="fs-12"> Posted by:    <span class=" pink">Priya priya 3 nov ,2023</span></div>
                            <br>
                            <p class="card-text">We sailed the seas for this fashion friday trend!</p>
                            <a href="#" class="stretched-link pink">Full read >></a>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

@endsection





