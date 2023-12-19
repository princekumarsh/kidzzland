@extends('layouts.front-end.app')
<style>
    body{
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
    color: #707070 !important;
    font-family: Averta,Helvetica,Arial,sans-serif;
    }
    .filter-header {
        width: 100%;
        /* min-width: 238px; */
        height: 64px;
        border-radius: 4px 4px 0 0;
        background-color: #fff;
        border: 1px solid #e6e6e6;
        padding: 20px 24px;
    }
    .filter-header .fv2-title {
        font-size: 16px;
        line-height: 24px;
        font-weight: 600;
        color: #707070;
    }

    .float-left {
        float: left!important;
    }
    .float-right {
        float: right !important;
    }

    .badge-kids{
        border:1px solid #ed54a4;
        border-radius:10px;
    }
    .br10{
        border-radius:10px;
    }
    .available-filters .scroller-wrapper-right .scroller-right {
    float: right;
    height: 36px;
    width: 36px;
    border-radius: 50%;
    }
    .scroller {
        cursor: pointer;
        background-size: 14px 25px;
        width: 48px;
        height: 48px;
        opacity: 1;
        border-radius: 24px;
        box-shadow: 0 2px 8px 0 rgba(0,0,0,.08);
        transition: box-shadow .25s ease;
        /* background: #fff url(https://static.hopscotch.in/web2/images/icon-carouselcaret.abf644f….svg) 21px 16px no-repeat; */
        background-size: 8px 15px;
    }
    .colorbox {
        width: 40px;
        height: 24px;
        display: inline-block;
    }
    .quickdetails {
        display: none;
    }
    .quickdetails1 {
        display: none;
    }
    .quickdetails2 {
        display: none;
    }
    .quickdetails3 {
        display: none;
    }
    .quickdetails4 {
        display: none;
    }
    .quickdetails5 {
        display: none;
    }
    .quickdetails6 {
        display: none;
    }
    .quickdetails7 {
        display: none;
    }
    .quickdetails8 {
        display: none;
    }


    @media only screen and (min-width: 600px) {
        .filter {
            display: block !important;
        }
    }
    .filter {
        display: none;
    }
    .pill-buttons:hover{
        /* background:#ed54a4; */
        background:#cac4c4;
        /* color: white; */
    }
    .pill-buttons{
        border-radius:30px !important;
        border:0.5px solid #cbcbcb !important;
        font-weight:300 !important;
    }
    .pill{
        border-radius:30px !important;
        border:0.5px solid #cbcbcb !important;
        font-weight:400 !important;

    }
    .fw-500{
        font-weight:500;
    }

</style>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
@section('content')

<div class="container" style="margin-right: 50px;">
    <div class="row">
        <div class="col-lg-2 p-2 filter">
            <div class="card ">
                <div class="filter-header">
                    <span class="fv2-title float-left">Filters</span>
                    <span class="fv2-clear float-right">Clear All</span>
                </div>
                <div class="card-body filter">
                    {{-- <div class="row" style="margin-left:9px;">
                        <a class="col-6">Filter</a>
                        <a class="col-6 text-center">Clear All</a>
                    </div> --}}

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Gender
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Boys
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Girls
                                    </label>
                                  </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                              Age
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        0-3 months
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        3-6 months
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        6-9 months
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        9-12 months
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        12-18 months
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        18-24 months
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        2-3 years
                                    </label>
                                </div>
                            </div>
                          </div>
                        </div>
                        {{-- category --}}
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              Category
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSub">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSub" aria-expanded="false" aria-controls="flush-collapseSub">
                                        Apparel - Children                                </button>
                                    </h2>
                                    <div id="flush-collapseSub" class="accordion-collapse collapse" aria-labelledby="flush-headingSub" >
                                      <div class="accordion-body">
                                        <a href="">Bottom</a>
                                        <a href="">Dresses</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSub1">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSub1" aria-expanded="false" aria-controls="flush-collapseSub1">
                                        Footwear - Children                                </button>
                                    </h2>
                                    <div id="flush-collapseSub1" class="accordion-collapse collapse" aria-labelledby="flush-headingSub1" >
                                      <div class="accordion-body">
                                        <a href="">Bottom</a>
                                        <a href="">Dresses</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        {{-- price --}}
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                              Price
                            </button>
                          </h2>
                          <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Below ₹700
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        ₹700 - ₹900
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        ₹900 - ₹1000
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        ₹1000 - ₹1400
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Above ₹1400
                                    </label>
                                </div>
                            </div>
                          </div>
                        </div>
                        {{-- color --}}
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                              Color
                            </button>
                          </h2>
                          <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="colorbox">
                                    <div class="redbox">
                                        <span class="colorbox" style="background:red;"></span>
                                    </div>
                                </div>
                                <div class="colorbox">
                                    <div class="redbox">
                                        <span class="colorbox" style="background:#F4CE14;"></span>
                                    </div>
                                </div>
                                <div class="colorbox">
                                    <div class="redbox">
                                        <span class="colorbox" style="background:#ED7D31;"></span>
                                    </div>
                                </div>
                                <div class="colorbox">
                                    <div class="redbox">
                                        <span class="colorbox" style="background:#99B080;"></span>
                                    </div>
                                </div>
                                <div class="colorbox">
                                    <div class="redbox">
                                        <span class="colorbox" style="background:#495E57;"></span>
                                    </div>
                                </div>
                                <div class="colorbox">
                                    <div class="redbox">
                                        <span class="colorbox" style="background:#FBECB2;"></span>
                                    </div>
                                </div>
                                {{-- <div class="form-check">
                                        <span class="colorbox" style="background:#F8BDEB;">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                        </span>
                                    </label>
                                </div> --}}
                            </div>
                          </div>
                        </div>
                        {{-- discount --}}
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingsix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                              Discount
                            </button>
                          </h2>
                          <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        10% and above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        20% and above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        30% and above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        40% and above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        50% and above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        60% and above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        70% and above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        80% and above
                                    </label>
                                </div>
                            </div>
                          </div>
                        </div>
                        {{-- delivery item --}}
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                              Delivery Time
                            </button>
                          </h2>
                          <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        In 1 weeks
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        In 2 weeks
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        In 3 weeks
                                    </label>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10 p-2">

            <div class="container">
                <div class="row">
                    <h6><span class="badge badge-pill badge-kids" style="color:#ed54a4;font-weight:400;">ocassion wear</span></h6>
                </div>
                <div class="row">
                    <div>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">Ethnic Sets</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">Party Dresses</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">Casual Dresses</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">Formal Sets</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">Jeans</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">Boys</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">Girls</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">0-2 years</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">2-4years</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">4-6years</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">6+years</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">Sets</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">Bottoms</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">Dresses</a>
                        <a href="" class="badge badge-light br10 pill p-2 m-1">Blue</a>
                    </div>
                    {{-- <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner" style="margin-left:20px;">
                          <div class="carousel-item active">
                            <a href="" class="badge badge-light br10 pill p-2 m-1">Ethnic Sets</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">Party Dresses</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">Casual Dresses</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">Formal Sets</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">Jeans</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">Boys</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">Girls</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">0-2 years</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">2-4years</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">4-6years</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">6+years</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">Sets</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">Bottoms</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">Dresses</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">Blue</a>
                            <a href="" class="badge badge-light br10 pill p-2 m-1">Pink</a>
                          </div>
                          <div class="carousel-item">
                            <a href="" class="badge badge-light br10">Party Wears</a>
                            <a href="" class="badge badge-light br10">Party Wears</a>
                            <a href="" class="badge badge-light br10">Party Wears</a>
                            <a href="" class="badge badge-light br10">Party Wears</a>
                            <a href="" class="badge badge-light br10">Party Wears</a>
                            <a href="" class="badge badge-light br10">Party Wears</a>
                            <a href="" class="badge badge-light br10">Party Wears</a>
                            <a href="" class="badge badge-light br10">Party Wears</a>
                          </div>
                          <div class="carousel-item">
                            <a href="" class="badge badge-light br10">Boys</a>
                            <a href="" class="badge badge-light br10">Girls</a>
                            <a href="" class="badge badge-light br10">0-2 years</a>
                            <a href="" class="badge badge-light br10">2-4 years</a>
                            <a href="" class="badge badge-light br10">4-6 years</a>
                            <a href="" class="badge badge-light br10">6+ years</a>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon badge-dark" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon badge-dark" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div> --}}
                </div>
            </div>
            <br>
            <div class="row" style="padding-left:15px;">
                <div class="d-flex">
                    <div class="">Showing 5,842 results for <strong>Occasion Wear</strong></div>
                    <div class="ms-auto">Sort by: Popular Highest Price Lowest Price New Arrival</div>
                </div>
            </div>
            <br>



            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6" style="padding-left:0px;padding-right:0px;">
                        <a href="{{route('product')}}" class="prothumb">
                            <div class="card" style="border-radius:0px;" >
                                <img src="{{asset('assets/frontend/img/p1.jpg')}}" class="" alt="...">
                                {{-- quickdetails hidden, show on hover --}}
                                <div class="quickdetails" style="margin-top: -166px">
                                    <div class="bg-secondary text-center text-light">Select a size for delivery information</div>
                                    <div class="bg-light clearfix container">
                                        <div class=" float-start"><button style="border:none;background:none"> Select a size</button></div>
                                        <div class="float-end"><button style="border:none;background:none;color:#ed54a4;"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> View size chart</button></div>
                                    </div>
                                    <div class="container p-2 bg-light">
                                        <button  class="badge badge-light m-1 pill-buttons">0-3 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">3-6 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">6-12 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">1-2 years</button>
                                        <button  class="badge badge-light m-1 pill-buttons">2-3 years</button>
                                    </div>
                                    <div class="bg-pink text-center text-light p-2"><button style="border:none;background:none;color:#fff;"> ADD TO CART</button></div>
                                </div>
                                <div class="card-body">

                                    <p class="card-text" style="font-size:13px;">Girls Pink Sequin Embellished Party Dress </p>
                                    <p class="card-text" style="font-size:13px;">₹1,800 ₹2,259 (20% off) </p>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6" style="padding-left:0px;padding-right:0px;">
                        <a href="" class="prothumb1">
                            <div class="card" style="border-radius:0px;" >

                                <img src="{{asset('assets/frontend/img/p2.jpg')}}" class="" alt="...">
                                <div class="quickdetails1" style="margin-top: -166px">
                                    <div class="bg-secondary text-center text-light">Select a size for delivery information</div>
                                    <div class="bg-light clearfix container">
                                        <div class=" float-start"><button style="border:none;background:none"> Select a size</button></div>
                                        <div class="float-end"><button style="border:none;background:none;color:#ed54a4;"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> View size chart</button></div>
                                    </div>
                                    <div class="container p-2 bg-light">
                                        <button  class="badge badge-light m-1 pill-buttons">0-3 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">3-6 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">6-12 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">1-2 years</button>
                                        <button  class="badge badge-light m-1 pill-buttons">2-3 years</button>
                                    </div>
                                    <div class="bg-pink text-center text-light p-2"><button style="border:none;background:none;color:#fff;"> ADD TO CART</button></div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text" style="font-size:13px;">Girls Pink Sequin Embellished Party Dress </p>
                                    <p class="card-text" style="font-size:13px;">₹1,800 ₹2,259 (20% off) </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6" style="padding-left:0px;padding-right:0px;">
                        <a href="" class="prothumb2">
                            <div class="card" style="border-radius:0px;" >
                                <img src="{{asset('assets/frontend/img/p3.jpg')}}" class="" alt="...">
                                <div class="quickdetails2" style="margin-top: -166px">
                                    <div class="bg-secondary text-center text-light">Select a size for delivery information</div>
                                    <div class="bg-light clearfix container">
                                        <div class=" float-start"><button style="border:none;background:none"> Select a size</button></div>
                                        <div class="float-end"><button style="border:none;background:none;color:#ed54a4;"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> View size chart</button></div>
                                    </div>
                                    <div class="container p-2 bg-light">
                                        <button  class="badge badge-light m-1 pill-buttons">0-3 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">3-6 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">6-12 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">1-2 years</button>
                                        <button  class="badge badge-light m-1 pill-buttons">2-3 years</button>
                                    </div>
                                    <div class="bg-pink text-center text-light p-2"><button style="border:none;background:none;color:#fff;"> ADD TO CART</button></div>
                                </div>
                                <div class="card-body">
                                  <p class="card-text" style="font-size:13px;">Girls Pink Sequin Embellished Party Dress </p>
                                  <p class="card-text" style="font-size:13px;">₹1,800 ₹2,259 (20% off) </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6" style="padding-left:0px;padding-right:0px;">
                        <a href="" class="prothumb3">
                            <div class="card" style="border-radius:0px;" >
                                <img src="{{asset('assets/frontend/img/p4.jpg')}}" class="" alt="...">
                                <div class="quickdetails3" style="margin-top: -166px">
                                    <div class="bg-secondary text-center text-light">Select a size for delivery information</div>
                                    <div class="bg-light clearfix container">
                                        <div class=" float-start"><button style="border:none;background:none"> Select a size</button></div>
                                        <div class="float-end"><button style="border:none;background:none;color:#ed54a4;"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> View size chart</button></div>
                                    </div>
                                    <div class="container p-2 bg-light">
                                        <button  class="badge badge-light m-1 pill-buttons">0-3 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">3-6 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">6-12 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">1-2 years</button>
                                        <button  class="badge badge-light m-1 pill-buttons">2-3 years</button>
                                    </div>
                                    <div class="bg-pink text-center text-light p-2"><button style="border:none;background:none;color:#fff;"> ADD TO CART</button></div>
                                </div>
                                <div class="card-body">
                                  <p class="card-text" style="font-size:13px;">Girls Pink Sequin Embellished Party Dress </p>
                                  <p class="card-text" style="font-size:13px;">₹1,800 ₹2,259 (20% off) </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6" style="padding-left:0px;padding-right:0px;">
                        <a href="" class="prothumb4">
                            <div class="card" style="border-radius:0px;" >
                                <img src="{{asset('assets/frontend/img/p5.jpg')}}" class="" alt="...">
                                <div class="quickdetails4" style="margin-top: -166px">
                                    <div class="bg-secondary text-center text-light">Select a size for delivery information</div>
                                    <div class="bg-light clearfix container">
                                        <div class=" float-start"><button style="border:none;background:none"> Select a size</button></div>
                                        <div class="float-end"><button style="border:none;background:none;color:#ed54a4;"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> View size chart</button></div>
                                    </div>
                                    <div class="container p-2 bg-light">
                                        <button  class="badge badge-light m-1 pill-buttons">0-3 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">3-6 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">6-12 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">1-2 years</button>
                                        <button  class="badge badge-light m-1 pill-buttons">2-3 years</button>
                                    </div>
                                    <div class="bg-pink text-center text-light p-2"><button style="border:none;background:none;color:#fff;"> ADD TO CART</button></div>
                                </div>
                                <div class="card-body">
                                  <p class="card-text" style="font-size:13px;">Girls Pink Sequin Embellished Party Dress </p>
                                  <p class="card-text" style="font-size:13px;">₹1,800 ₹2,259 (20% off) </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6" style="padding-left:0px;padding-right:0px;">
                        <a href="" class="prothumb5">
                            <div class="card" style="border-radius:0px;" >
                                <img src="{{asset('assets/frontend/img/p6.jpg')}}" class="" alt="...">
                                <div class="quickdetails5" style="margin-top: -166px">
                                    <div class="bg-secondary text-center text-light">Select a size for delivery information</div>
                                    <div class="bg-light clearfix container">
                                        <div class=" float-start"><button style="border:none;background:none"> Select a size</button></div>
                                        <div class="float-end"><button style="border:none;background:none;color:#ed54a4;"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> View size chart</button></div>
                                    </div>
                                    <div class="container p-2 bg-light">
                                        <button  class="badge badge-light m-1 pill-buttons">0-3 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">3-6 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">6-12 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">1-2 years</button>
                                        <button  class="badge badge-light m-1 pill-buttons">2-3 years</button>
                                    </div>
                                    <div class="bg-pink text-center text-light p-2"><button style="border:none;background:none;color:#fff;"> ADD TO CART</button></div>
                                </div>
                                <div class="card-body">
                                  <p class="card-text" style="font-size:13px;">Girls Pink Sequin Embellished Party Dress </p>
                                  <p class="card-text" style="font-size:13px;">₹1,800 ₹2,259 (20% off) </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6" style="padding-left:0px;padding-right:0px;">
                        <a href="" class="prothumb6">
                            <div class="card" style="border-radius:0px;" >
                                <img src="{{asset('assets/frontend/img/p7.jpg')}}" class="" alt="...">
                                <div class="quickdetails6" style="margin-top: -166px">
                                    <div class="bg-secondary text-center text-light">Select a size for delivery information</div>
                                    <div class="bg-light clearfix container">
                                        <div class=" float-start"><button style="border:none;background:none"> Select a size</button></div>
                                        <div class="float-end"><button style="border:none;background:none;color:#ed54a4;"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> View size chart</button></div>
                                    </div>
                                    <div class="container p-2 bg-light">
                                        <button  class="badge badge-light m-1 pill-buttons">0-3 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">3-6 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">6-12 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">1-2 years</button>
                                        <button  class="badge badge-light m-1 pill-buttons">2-3 years</button>
                                    </div>
                                    <div class="bg-pink text-center text-light p-2"><button style="border:none;background:none;color:#fff;"> ADD TO CART</button></div>
                                </div>
                                <div class="card-body">
                                  <p class="card-text" style="font-size:13px;">Girls Pink Sequin Embellished Party Dress </p>
                                  <p class="card-text" style="font-size:13px;">₹1,800 ₹2,259 (20% off) </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6" style="padding-left:0px;padding-right:0px;">
                        <a href="" class="prothumb7">
                            <div class="card" style="border-radius:0px;" >
                                <img src="{{asset('assets/frontend/img/p8.jpg')}}" class="" alt="...">
                                <div class="quickdetails7" style="margin-top: -166px">
                                    <div class="bg-secondary text-center text-light">Select a size for delivery information</div>
                                    <div class="bg-light clearfix container">
                                        <div class=" float-start"><button style="border:none;background:none"> Select a size</button></div>
                                        <div class="float-end"><button style="border:none;background:none;color:#ed54a4;"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> View size chart</button></div>
                                    </div>
                                    <div class="container p-2 bg-light">
                                        <button  class="badge badge-light m-1 pill-buttons">0-3 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">3-6 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">6-12 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">1-2 years</button>
                                        <button  class="badge badge-light m-1 pill-buttons">2-3 years</button>
                                    </div>
                                    <div class="bg-pink text-center text-light p-2"><button style="border:none;background:none;color:#fff;"> ADD TO CART</button></div>
                                </div>
                                <div class="card-body">
                                  <p class="card-text" style="font-size:13px;">Girls Pink Sequin Embellished Party Dress </p>
                                  <p class="card-text" style="font-size:13px;">₹1,800 ₹2,259 (20% off) </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 reducelinkarea" style="padding-left:0px;padding-right:0px;">
                        <a href="#" class="prothumb8">
                            <div class="card" style="border-radius:0px;" >
                                <img src="{{asset('assets/frontend/img/p9.jpg')}}" class="" alt="...">
                                <div class="quickdetails8" style="margin-top: -166px">
                                    <div class="bg-secondary text-center text-light">Select a size for delivery information</div>
                                    <div class="bg-light clearfix container">
                                        <div class=" float-start"><button style="border:none;background:none"> Select a size</button></div>
                                        <div class="float-end"><button style="border:none;background:none;color:#ed54a4;"type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"> View size chart</button></div>
                                    </div>
                                    <div class="container p-2 bg-light">
                                        <button  class="badge badge-light m-1 pill-buttons">0-3 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">3-6 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">6-12 months</button>
                                        <button  class="badge badge-light m-1 pill-buttons">1-2 years</button>
                                        <button  class="badge badge-light m-1 pill-buttons">2-3 years</button>
                                    </div>
                                    <div class="bg-pink text-center text-light p-2"><button style="border:none;background:none;color:#fff;"> ADD TO CART</button></div>
                                </div>
                                <div class="card-body">
                                  <p class="card-text" style="font-size:13px;">Girls Pink Sequin Embellished Party Dress </p>
                                  <p class="card-text" style="font-size:13px;">₹1,800 ₹2,259 (20% off) </p>
                                </div>


                            </div>
                        </a>
                    </div>
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






@endsection

<script>
    $(document).ready(function() {

        $(".prothumb").hover(function () {
                $(".quickdetails").slideToggle();
            })
        $(".prothumb1").hover(function () {
            $(".quickdetails1").slideToggle();
            })
        $(".prothumb2").hover(function () {
            $(".quickdetails2").slideToggle();
            })
        $(".prothumb3").hover(function () {
            $(".quickdetails3").slideToggle();
            })
        $(".prothumb4").hover(function () {
            $(".quickdetails4").slideToggle();
            })
        $(".prothumb5").hover(function () {
            $(".quickdetails5").slideToggle();
            })
        $(".prothumb6").hover(function () {
            $(".quickdetails6").slideToggle();
            })
        $(".prothumb7").hover(function () {
            $(".quickdetails7").slideToggle();
            })
        $(".prothumb8").hover(function () {
            $(".quickdetails8").slideToggle();
            })
    })

    //bootstrap modal script
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
    })
    // end

</script>
