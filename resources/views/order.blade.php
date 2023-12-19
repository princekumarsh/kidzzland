@extends('layouts.front-end.app')

@section('content')
<style>
    body{
    color: #707070 !important;
    font-family: Averta,Helvetica,Arial,sans-serif;
    }
    @media only screen and (min-width: 600px){
        .mlr {
            margin-left: 130px;
            margin-right: 130px;
        }
    }
    .axil-dashboard-aside {
        border: 1px solid var(--color-light);
        padding: 10px 5px 5px;
        border-radius: 6px;
    }
    .axil-dashboard-aside .nav-tabs {
        border-bottom: none;
    }
    .axil-dashboard-aside .nav-link.active, .axil-dashboard-aside .nav-link:hover {
        background-color: #F6F7FB;
        color: #ED54A4;
    }

    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #ED54A4;
        background-color: #F6F7FB;
        border-color: #dee2e6 #dee2e6 #fff;
    }
    .axil-dashboard-aside .nav-link {
        font-weight: 500;
        color: var(--color-body);
        font-size: var(--font-size-b2);
        position: relative;
        border-radius: 6px;
        padding:9px;
        margin-bottom: 8px;
        transition: var(--transition);
        border: none;
        width: 100%;
    }
    .table tbody tr th {
        color: #e76458;
    }
    .fw-900{
        font-weight:700;
        color:#ED54A4
    }
    .view-btn {
        padding: 2px 10px;
        border: 1px solid #777777;
        background-color: rgba(0, 0, 0, 0);
        color: #27272e;
    }
    a.axil-btn {
        border-radius: 6px;
        font-size: 14px;
        line-height: 1.7;
        font-weight: 500;
        display: inline-block;
        padding: 4px 12px;
        position: relative;
        transition: all .3s ease-in-out;
        z-index: 1;
    }
    a.axil-btn:hover{
        background-color:#ED54A4;
        color:white;
        border:1px solid#ed54a4


    }

</style>

<div class="container mlr mt-4" style="max-width: -webkit-fill-available;">
    <div class="row">
        <div class="col-lg-3">
            @include('layouts.front-end.partials.profile-aside')
        </div>
        <div class="col-lg-9">
            <h2 class="text-center">My Orders</h2>
            <div class="card">
                <div class="card-body">
                    <div class="row pt-4">
                        <div class="col-lg-2">
                            <img  class="br4" height="116px" width="116px" src="https://static.hopscotch.in/fstatic/product/202307/446dd6ea-a682-4ef5-a110-faf9d33955d0_medium.jpg?version=1690791037452&tr=w-480,c-at_max,n-medium" alt="">
                        </div>
                        <div class="col-lg-7">
                            <div class="product-title">
                                <h6>Girls White And Magenta Floral Printed</h6>
                            </div>
                            <div class="product-size fs14">
                                Size: 12-14 years
                            </div>
                            <div class="product-price fs18 fw-600">
                                Qty: 1
                            </div>
                            <div class="product-price fs18 fw-900">
                                Price: ₹499
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="price">
                                <a href="{{route('orderDetails')}}" class="m-1 axil-btn view-btn">Details</a>
                                <br>
                                <a href="" class="m-1 axil-btn view-btn">Track</a>
                                <br>
                                <a href="" class="m-1 axil-btn view-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row pt-4">
                        <div class="col-lg-2">
                            <img  class="br4" height="116px" width="116px" src="https://static.hopscotch.in/fstatic/product/202209/cd9ccb9d-60d8-4e34-9758-55e0944398b9_medium.jpg?version=1664352780515" alt="">
                        </div>
                        <div class="col-lg-7">
                            <div class="product-title">
                                <h6>Boys Blue Dinosaur Print</h6>
                            </div>
                            <div class="product-size fs14">
                                Size: 2-4 years
                            </div>
                            <div class="product-price fs18 fw-600">
                                Qty: 1
                            </div>
                            <div class="product-price fs18 fw-900">
                                Price: ₹199
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="price">
                                <a href="" class="m-1 axil-btn view-btn">Details</a>
                                <br>
                                <a href="" class="m-1 axil-btn view-btn">Track</a>
                                <br>
                                <a href="" class="m-1 axil-btn view-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row pt-4">
                        <div class="col-lg-2">
                            <img  class="br4" height="116px" width="116px" src="https://static.hopscotch.in/fstatic/product/202307/446dd6ea-a682-4ef5-a110-faf9d33955d0_medium.jpg?version=1690791037452&tr=w-480,c-at_max,n-medium" alt="">
                        </div>
                        <div class="col-lg-7">
                            <div class="product-title">
                                <h6>Girls White And Magenta Floral Printed</h6>
                            </div>
                            <div class="product-size fs14">
                                Size: 12-14 years
                            </div>
                            <div class="product-price fs18 fw-600">
                                Qty: 1
                            </div>
                            <div class="product-price fs18 fw-900">
                                Price: ₹499
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="price">
                                <a href="" class="m-1 axil-btn view-btn">Details</a>
                                <br>
                                <a href="" class="m-1 axil-btn view-btn">Track</a>
                                <br>
                                <a href="" class="m-1 axil-btn view-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
