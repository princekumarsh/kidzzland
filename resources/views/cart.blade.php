@extends('layouts.front-end.app')
@section('content')
<style>
    @media only screen and (min-width: 600px) {
        .mlr{
            margin-left:200px;
            margin-right:200px;
        }
    }

    .bgpink{
        background:#ed54a4;
        color:#fff;
    }
    .dropdown-item.active, .dropdown-item:active {
        background-color: #ed54a4;
    }
    .fs-14{
        font-size:14px;
    }
    .fs-18{
        font-size:18px;
    }
    .fw-600{
        font-weight: 600;
    }
    .br4{
        border-radius: 4px;
    }
    .bg-white{
        background: #fff;
    }
    .fs-8{
        font-size: 10px;
    }
</style>
<div class="container mt-3 mlr" style="max-width: -webkit-fill-available;">
    <div class="row">
        <div class="col-lg-9">
            <div class="bg-light clearfix container">
                <div class=" float-start"><h4>Cart &nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;2 items</h4></div>
                <div class="float-end">
                    <div class="dropdown">
                        <a class="btn pink dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Enter Pincode for delivery
                        </a>

                        <ul class="dropdown-menu">
                            <div class="dropdown-item">
                                <label for="inputPassword5" class="form-label">Enter a pincode</label>
                                <input type="number" id="inputPassword5" class="form-control">
                            </div>
                            <div class="dropdown-item">
                                <button class="btn bgpink">
                                    Check
                                </button>
                            </div>
                        </ul>
                      </div>
                </div>
            </div>
            <div class="safetxt p-2 fs-14">
                <i class="fa-solid fa-circle-info"></i>
                100% Safe and Assured Delivery at your doorstep.
            </div>
            <div class="container">
                <div class="row pt-4">
                    <div class="col-lg-3">
                        <img  class="br4" height="116px" width="116px" src="https://static.hopscotch.in/fstatic/product/202307/446dd6ea-a682-4ef5-a110-faf9d33955d0_medium.jpg?version=1690791037452&tr=w-480,c-at_max,n-medium" alt="">
                    </div>
                    <div class="col-lg-9">
                        <div class="product-title">
                            <h6>Girls White And Magenta Floral Printed</h6>
                        </div>
                        <div class="product-size fs14">
                            Size: 12-14 years
                        </div>
                        <div class="product-price fs18 fw-600">
                            ₹ 800
                        </div>
                        <div class="bg-white clearfix">
                            <div class="float-start">
                                <div class="btn-group pt-2">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Qty 1
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li class="dropdown-item">1</li>
                                    <li class="dropdown-item">2</li>
                                    <li class="dropdown-item">3</li>
                                    <li class="dropdown-item">4</li>
                                    <li class="dropdown-item">5</li>
                                    <li class="dropdown-item">6</li>
                                    <li class="dropdown-item">7</li>
                                    <li class="dropdown-item">8</li>
                                    <li class="dropdown-item">9</li>
                                    <li class="dropdown-item">10</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="float-end pt-2"><button style="background: none;border:none;"><i class="fa-solid fa-trash"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-lg-3">
                        <img  class="br4" height="116px" width="116px" src="https://static.hopscotch.in/fstatic/product/202307/446dd6ea-a682-4ef5-a110-faf9d33955d0_medium.jpg?version=1690791037452&tr=w-480,c-at_max,n-medium" alt="">
                    </div>
                    <div class="col-lg-9">
                        <div class="product-title">
                            <h6>Girls White And Magenta Floral Printed</h6>
                        </div>
                        <div class="product-size fs14">
                            Size: 12-14 years
                        </div>
                        <div class="product-price fs18 fw-600">
                            ₹ 800
                        </div>
                        <div class="bg-white clearfix">
                            <div class="float-start">
                                <div class="btn-group pt-2">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Qty 1
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li class="dropdown-item">1</li>
                                    <li class="dropdown-item">2</li>
                                    <li class="dropdown-item">3</li>
                                    <li class="dropdown-item">4</li>
                                    <li class="dropdown-item">5</li>
                                    <li class="dropdown-item">6</li>
                                    <li class="dropdown-item">7</li>
                                    <li class="dropdown-item">8</li>
                                    <li class="dropdown-item">9</li>
                                    <li class="dropdown-item">10</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="float-end pt-2"><button style="background: none;border:none;"><i class="fa-solid fa-trash"></i></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card" style="border-radius:0;">
                <div class="card-body">
                    <div class="bg-light clearfix container">
                        <div class="fs-14 float-start"><button style="border:none;background:none" onclick="openNav()"> Apply Promocode</button></div>
                        <div class="float-end"><button style="border:none;background:none" onclick="openNav()"><i class="fa-solid fa-chevron-right" style="font-size:10px;"></i></button></div>
                    </div>
                    <hr>
                    <div class="summary">
                        <h5>Price summary</h5>
                    </div>
                    <div class="fs-8">
                        Includes GST and all government taxes
                    </div>
                    <br>
                    <div class="bg-white clearfix fs-14 pt-2">
                        <div class="float-start">Total item price</div>
                        <div class="float-end">₹6,057</div>
                    </div>
                    <div class="bg-white clearfix fs-14 pt-2">
                        <div class="float-start">Item discount</div>
                        <div class="float-end">-₹1,703</div>
                    </div>
                    <div class="bg-white clearfix fs-14 pt-2">
                        <div class="float-start">Shipping fee</div>
                        <div class="float-end">Free</div>
                    </div>
                    <hr>
                    <div class="bg-white clearfix fs-14">
                        <div class="float-start"><strong> Total</strong></div>
                        <div class="float-end"><strong> ₹4,354</strong></div>
                    </div>
                    <div class="mt-2">
                        <div class="bg-pink text-center text-light p-2 fs-14">
                            <button class="fw-600" style="border:none;background:none;color:#fff;" onclick="window.location.href='{{route('checkout')}}'"> PROCEED TO CHECKOUT
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

@endsection
