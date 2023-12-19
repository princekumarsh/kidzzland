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
    .user {
    display: inline-block;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    }
</style>



<div class="container mlr mt-4" style="max-width: -webkit-fill-available;">

    <div class="row">
        <div class="col-lg-4 p-4">
            <div class="card">
                <div class="card-body">
                    <div class="wrapper">
                        <div class="text-center">
                            <img src="https://www.mecgale.com/wp-content/uploads/2017/08/dummy-profile.png" class="user">
                            <div class="name">Nilam </div>
                            <div class="details">
                                <span>6 Moments</span>
                                <span> • </span><span>1 Like</span>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-4">
            <div class="tile">
                <img class="tile-img" src="https://static.hopscotch.in/moments/202311/1698822743656c91bd3b8-4e3d-4112-b3f1-0ae54_crop7e201a4.jpeg" alt="">
                <div class="d-flex">
                    <div><img src="https://static.hopscotch.in/web2/images/icon-moments-grey.8a3ac705ad9d1d22645a76ef597615f0.svg" alt=""></div>
                    <div class="ms-auto">1h</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-4">
            <div class="tile">
                <img class="tile-img" src="https://static.hopscotch.in/moments/202311/169877915859902ec9f29-4260-4125-90d7-befd8_crop6e3830a.jpeg" alt="">
                <div class="d-flex">
                    <div><img src="https://static.hopscotch.in/web2/images/icon-moments-grey.8a3ac705ad9d1d22645a76ef597615f0.svg" alt=""></div>
                    <div class="ms-auto">1h</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-4">
            <div class="tile">
                <a href="{{route('momentdetails')}}">
                    <img class="tile-img" src="https://static.hopscotch.in/moments/202311/1698812278340ef6405ba-9b2d-4f9b-b6e6-f4283_crope303a90.jpeg" alt="">
                    <div class="d-flex">
                        <div><img src="https://static.hopscotch.in/web2/images/icon-moments-grey.8a3ac705ad9d1d22645a76ef597615f0.svg" alt=""></div>
                        <div class="ms-auto">1h</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 p-4">
            <div class="tile">
                <img class="tile-img" src="https://static.hopscotch.in/moments/202311/1698822696604d750b9ec-543d-41e3-84c7-42877_crop65d4d03.jpeg" alt="">
                <div class="d-flex">
                    <div><img src="https://static.hopscotch.in/web2/images/icon-moments-grey.8a3ac705ad9d1d22645a76ef597615f0.svg" alt=""></div>
                    <div class="ms-auto">1h</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-4">
            <div class="tile">
                <img class="tile-img" src="https://static.hopscotch.in/moments/202310/1698767600850e62dd53a-98d0-4e8c-ab6a-555fe_cropd9d9f52.jpeg" alt="">
                <div class="d-flex">
                    <div><img src="https://static.hopscotch.in/web2/images/icon-moments-grey.8a3ac705ad9d1d22645a76ef597615f0.svg" alt=""></div>
                    <div class="ms-auto">1h</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
