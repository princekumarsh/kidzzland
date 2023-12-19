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
    .axil-btn {
        border-radius: 6px;
        font-size: 16px;
        line-height: 1.7;
        font-weight: 700;
        display: inline-block;
        padding: 2px 10px;
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
            <h2 class="text-center">Order Details</h2>
            <div class="card">
                <div class="card-body">
                    <div class="axil-dashboard-order">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Order No.</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Shipping address</th>
                                        <th scope="col">Billing address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">100032</th>
                                        <td>27 Oct, 2023</td>

                                        <td>
                                            140, East vishawakarma colony, khemnichak East
                                            vishawakarma colony, khemnichakk,<br />
                                            PATNA , 800027
                                        </td>

                                        <td>
                                            140, East vishawakarma colony, khemnichak East
                                            vishawakarma colony, khemnichakk, <br />
                                            PATNA , 800027
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table>
                                <tbody>
                                    {{-- <tr>
                                        <td class="col-2 for-tab-img">
                                            <img
                                                class="d-block"
                                                onerror="this.src='http://localhost/sync/public/assets/front-end/img/image-place-holder.png'"
                                                src="http://localhost/sync/storage/app/public/product/thumbnail/2023-08-27-64eb8c4be55b9.png"
                                                alt="VR Collection"
                                                width="60"
                                            />
                                        </td>
                                        <td class="col-10 for-glaxy-name __vertical-middle">
                                            <a
                                                href="http://localhost/sync/product/syncbel-led-night-lamp-05w-NRZ54j"
                                            >
                                                0.5 Watt LED Night Lamp
                                            </a>
                                            <br />
                                            <span>Variant : </span>
                                            Blue
                                        </td>
                                        <td></td>
                                        <td width="100%">
                                            <div class="text-right">
                                                <span class="font-weight-bold amount">₹79.0 </span>
                                                <br />
                                                <span class="word-nobreak">Qty: 1</span>
                                            </div>
                                        </td>
                                    </tr> --}}
                                    {{-- <tr>
                                        <div class="row pt-4">
                                            <div class="col-lg-2">
                                                <img class="br4" height="116px" width="116px" src="https://static.hopscotch.in/fstatic/product/202307/446dd6ea-a682-4ef5-a110-faf9d33955d0_medium.jpg?version=1690791037452&amp;tr=w-480,c-at_max,n-medium" alt="">
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
                                        </div>
                                    </tr> --}}
                                    <tr>
                                        <td>
                                            <img class="br4" height="116px" width="116px" src="https://static.hopscotch.in/fstatic/product/202307/446dd6ea-a682-4ef5-a110-faf9d33955d0_medium.jpg?version=1690791037452&amp;tr=w-480,c-at_max,n-medium" alt=""></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="product-title ml-4">
                                                <h6>Girls White And Magenta Floral Printed</h6>
                                            </div>
                                            <div class="product-size fs14 ml-4">
                                                Size: 12-14 years
                                            </div>
                                            <div class="product-price fs18 fw-600 ml-4">
                                                Qty: 1
                                            </div>
                                            <div class="product-price fs18 fw-900 ml-4">
                                                Price: ₹499
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row d-flex justify-content-end">
                            <div class="col-md-8 col-lg-5">
                                <table class="table table-borderless">
                                    <tbody class="totals">
                                        <tr>
                                            <td>
                                                <div class="text-left">
                                                    <span class="product-qty">Item</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span>1</span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="text-left">
                                                    <span class="product-qty">Subtotal</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span>₹79.0</span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="text-left">
                                                    <span class="product-qty">Tax fee</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span>₹0.0</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-left">
                                                    <span class="product-qty">Shipping Fee</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span>₹0.0</span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="text-left">
                                                    <span class="product-qty"
                                                        >Discount On product</span
                                                    >
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span>- ₹30.0</span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="text-left">
                                                    <span class="product-qty">Coupon Discount</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span>- ₹0.0</span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="border-top border-bottom">
                                            <td>
                                                <div class="text-left">
                                                    <span class="font-weight-bold">Total</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right">
                                                    <span class="font-weight-bold amount"
                                                        >₹49.0</span
                                                    >
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row justify-content mt-4 m-4 for-mobile-glaxy __gap-6px flex-nowrap">
                            <a href=""
                                class="col-6 btn btn-warning btn-lg for-glaxy-mobile w-50"
                                style="font-size: 16px">
                                Generate invoice
                            </a>
                            <a
                                class="col-6 btn btn-lg btn-primary text-white w-49"
                                type="button"
                                style="font-size: 16px; margin-left: 6px;background-color:#ED54a4;border:1px solid #ed54a4"
                                href=""
                            >
                                Track Order
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
