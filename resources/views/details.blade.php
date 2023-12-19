@extends('layouts.front-end.app')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .incl{
        font-size:11px
    }
    .pinkline{
        border-bottom:#ed54a4 4px solid;
    }

</style>




<style>
    .sidebar {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    }

    .sidebar a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
    }

    .sidebar a:hover {
    color: #f1f1f1;
    }

    .sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    }

    .openbtn {
    font-size: 20px;
    cursor: pointer;
    background-color: #111;
    color: white;
    padding: 10px 15px;
    border: none;
    }

    .openbtn:hover {
    background-color: #444;
    }

    #main {
    transition: margin-left .5s;
    padding: 16px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
    .sidebar {padding-top: 15px;}
    .sidebar a {font-size: 18px;}
    }
</style>


<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">Offers</a>
</div>

<script>
    function openNav() {
    document.getElementById("mySidebar").style.width = "350px";
    document.getElementById("main").style.marginRight = "250px";
    }

    function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginRight= "0";
    }
</script>

<div class="container pt-2">
  <div class="row">
      <div class="col-lg-8">
        <div id="film_roll">
            <div>
              <a href="..."><img width="500px" src="https://static.hopscotch.in/fstatic/product/202309/01dae1ea-3460-48ea-85fa-e916aca6cfa6_full.jpg?version=1694608631082&tr=w-1080,c-at_max,n-medium"> </a>
            </div>
            <div>
              <a href="..."><img width="500px" src="https://static.hopscotch.in/fstatic/product/202309/9fe7f090-1d9f-42a3-8bea-20d8b0a6c4e2_full.jpg?version=1694608626806&tr=w-1080,c-at_max,n-medium"> </a>
            </div>
            <div>
              <a href="..."><img width="500px" src="https://static.hopscotch.in/fstatic/product/202309/5548f009-b27e-4555-83a4-378d6bce2547_full.jpg?version=1694608630200&tr=w-1080,c-at_max,n-medium"> </a>
            </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="container">
            <div class="title">
                <h6>Boys Navy and White Stripe Print Shirt and Pant Formal Set with Bowtie</h6>
            </div>
            <div class="price">
                ₹1,016 <strike>MRP:₹1,129</strike>  10% off
            </div>
            <div class="incl">
                Inclusive of all taxes
            </div>
            <br>
            <hr>
            <div class="offers">
                <div class="d-flex ">
                    <div>offers</div>
                    <div class="ms-auto "><button style="border:none;background:none;color:#ed54a4;" class="pink" onclick="openNav()">SEE ALL</button></div>

                </div>
            </div>
            <hr>
            <div class="size">
                <div class="d-flex ">
                    <div>Size</div>
                    <div class="ms-auto "><button style="border:none;background:none;color:#ed54a4;"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">VIEW SIZE CHART</button></div>
                </div>
                <div class="selsize pt-2">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select a Size</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="add-to-car pt-3 pb-3">
                <div class="bg-pink text-center text-light p-2">
                    <button style="border:none;background:none;color:#fff;" onclick="window.location.href='{{route('cart')}}'"> ADD TO CART
                    </button>
            </div>
            {{-- <div class="css-174a2dt">
                <div class="css-1ockbbe">
                    <span class="css-1qpbk80">Delivery </span
                    ><span class="css-tku32c"> <!-- -->Check<!-- -->pincode</span>
                </div>
                <div class="css-1t001yx">
                    <div class="css-lfh3tn">
                        <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg"
                            fill-rule="currentColor"
                            aria-hidden="true"
                            class="css-6q9mil"
                        >
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h16v16H0z"></path>
                                <g
                                    stroke="#707070"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="M3 8l3.5 3.5M13 4l-6.5 7.5"></path>
                                </g>
                            </g></svg
                        ><span class="css-bwuqpq"
                            >Get it in
                            <span color="#ffffff" class="css-5fjxhp">3-4 days</span></span
                        >
                    </div>
                    <div class="css-lfh3tn">
                        <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg"
                            fill-rule="currentColor"
                            aria-hidden="true"
                            class="css-6q9mil"
                        >
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h16v16H0z"></path>
                                <g
                                    stroke="#707070"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="M3 8l3.5 3.5M13 4l-6.5 7.5"></path>
                                </g>
                            </g></svg
                        ><span class="css-bwuqpq">Cash on delivery available.</span>
                    </div>
                    <div class="css-lfh3tn">
                        <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg"
                            fill-rule="currentColor"
                            aria-hidden="true"
                            class="css-6q9mil"
                        >
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h16v16H0z"></path>
                                <g
                                    stroke="#707070"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="M3 8l3.5 3.5M13 4l-6.5 7.5"></path>
                                </g>
                            </g></svg
                        ><span class="css-bwuqpq">15 days return </span>
                    </div>
                    <div class="css-lfh3tn">
                        <svg
                            width="16"
                            height="16"
                            viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg"
                            fill-rule="currentColor"
                            aria-hidden="true"
                            class="css-6q9mil"
                        >
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h16v16H0z"></path>
                                <g
                                    stroke="#707070"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="M3 8l3.5 3.5M13 4l-6.5 7.5"></path>
                                </g>
                            </g></svg
                        ><span class="css-bwuqpq">15 days exchange </span>
                    </div>
                </div>
            </div> --}}
            <br>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Item details
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="css-h65mcm"><b>FEATURES:</b><ul><li>Top Material: 100% Cotton</li><li>Bottom Material: 100% Cotton</li><li>Fit Type: Regular</li><li>The actual product may differ slightly in color from the one illustrated in the images.</li></ul><b>WHAT'S INCLUDED:</b><ul><li>1 Shirt, 1 Pant, 1 Bowtie</li></ul><b>CARE:</b><ul><li>Gentle Wash</li></ul></div>
                    </div>
                  </div>
                </div>
            </div>
            <br>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        More info
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="css-h65mcm"><div>
                            <p><b>Country of Origin: </b> China</p>

                            <b>Manufacturer Details:</b>
                            <ul style="margin-bottom: 10px;">
                               <li>Yierying,Fujian,China</li>
                            </ul>

                            <b>Importer Details:</b>
                            <ul>
                               <li>Hopscotch Wholesale Trading Pvt Ltd A/7, Harihar Corp., Mankoli Naka, Dapode, Bhiwandi, Thane - 421302.</li>
                            </ul>

                            <b>Packer Details:</b>
                            <ul>
                               <li>Yierying,Fujian,China</li>
                            </ul>

                            </div></div>
                      </div>
                    </div>
                </div>
            </div>

        </div>
      </div>
  </div>
</div>
<br>
<br>
<div class="container pt-2">
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="text-center pb-2 "><h3>Similar dresses</h3></div>
            <div class="d-flex mb-3"><div class=" justify-content-center pinkline"></div>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div>
                        <a href="">
                            <img src="https://static.hopscotch.in/fstatic/product/202310/8ef561a4-a6fb-4964-9189-57c391070b7c_medium.jpg?version=1697075777756&tr=w-720,c-at_max,n-medium" alt="">
                        </a>
                    </div>
                    <div class="text-center">₹ 999</div>
                </div>
                <div class="item">
                    <div>
                        <a href="">
                            <img src="https://static.hopscotch.in/fstatic/product/202310/8ef561a4-a6fb-4964-9189-57c391070b7c_medium.jpg?version=1697075777756&tr=w-720,c-at_max,n-medium" alt="">
                        </a>
                    </div>
                    <div class="text-center">₹ 999</div>
                </div>
                <div class="item">
                    <div>
                        <a href="">
                            <img src="https://static.hopscotch.in/fstatic/product/202310/8ef561a4-a6fb-4964-9189-57c391070b7c_medium.jpg?version=1697075777756&tr=w-720,c-at_max,n-medium" alt="">
                        </a>
                    </div>
                    <div class="text-center">₹ 999</div>
                </div>
                <div class="item">
                    <div>
                        <a href="">
                            <img src="https://static.hopscotch.in/fstatic/product/202310/8ef561a4-a6fb-4964-9189-57c391070b7c_medium.jpg?version=1697075777756&tr=w-720,c-at_max,n-medium" alt="">
                        </a>
                    </div>
                    <div class="text-center">₹ 999</div>
                </div>
                <div class="item">
                    <div>
                        <a href="">
                            <img src="https://static.hopscotch.in/fstatic/product/202310/8ef561a4-a6fb-4964-9189-57c391070b7c_medium.jpg?version=1697075777756&tr=w-720,c-at_max,n-medium" alt="">
                        </a>
                    </div>
                    <div class="text-center">₹ 999</div>
                </div>
                <div class="item">
                    <div>
                        <a href="">
                            <img src="https://static.hopscotch.in/fstatic/product/202310/8ef561a4-a6fb-4964-9189-57c391070b7c_medium.jpg?version=1697075777756&tr=w-720,c-at_max,n-medium" alt="">
                        </a>
                    </div>
                    <div class="text-center">₹ 999</div>
                </div>
                <div class="item">
                    <div>
                        <a href="">
                            <img src="https://static.hopscotch.in/fstatic/product/202203/2ad47a50-3450-4c7b-8964-ead4935903fc_medium.jpg?version=1647250592259&tr=w-720,c-at_max,n-medium" alt="">
                        </a>
                    </div>
                    <div class="text-center">₹ 999</div>
                </div>
                <div class="item">
                    <div>
                        <a href="">
                            <img src="https://static.hopscotch.in/fstatic/product/202203/2ad47a50-3450-4c7b-8964-ead4935903fc_medium.jpg?version=1647250592259&tr=w-720,c-at_max,n-medium" alt="">
                        </a>
                    </div>
                    <div class="text-center">₹ 999</div>
                </div>
                <div class="item">
                    <div>
                        <a href="">
                            <img src="https://static.hopscotch.in/fstatic/product/202203/2ad47a50-3450-4c7b-8964-ead4935903fc_medium.jpg?version=1647250592259&tr=w-720,c-at_max,n-medium" alt="">
                        </a>
                    </div>
                    <div class="text-center">₹ 999</div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assets/frontend/js/jquery.film_roll.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.touchSwipe.js')}}"></script>

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:8
        }
    }
})


// var film_roll = new FilmRoll({
//     container: '#film_roll',
//     vertical_center: true,
// });


$(function() {
  fr = new FilmRoll({
    configure_load: true,
    container: '#film_roll',
    height: 554,
    width: 200
  });
});
</script>

@endsection





