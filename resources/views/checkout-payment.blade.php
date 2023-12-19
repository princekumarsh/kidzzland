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
    .ffdm{
        font-family:"DM Sans", sans-serif;
    }
</style>

<div class="container mt-3 mlr" style="max-width: -webkit-fill-available;">
    <div class="row">
        <div class="col-lg-9">

                <h3>PAYMENT METHOD</h3>
                <section>
                    <div class="checkout_details">

                        <!-- Payment methods accordion-->
                        <h2 class="h6 pb-3 mb-2 mt-5">Choose payment</h2>
                        <div class="row g-3">
                            <div class="col-sm-6" id="cod-for-cart">
                                <div class="card cursor-pointer">
                                    <div class="card-body __h-100px">
                                        <form
                                            action="http://localhost/sync/checkout-complete"
                                            method="get"
                                            class="needs-validation"
                                        >
                                            <input
                                                type="hidden"
                                                name="payment_method"
                                                value="cash_on_delivery"
                                            />
                                            <button
                                                class="btn btn-block click-if-alone"
                                                type="submit"
                                            >
                                                <img
                                                    width="150"
                                                    class="__mt-n-10"
                                                    src="http://localhost/sync/public/assets/front-end/img/cod.png"
                                                />
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card cursor-pointer">
                                    <div class="card-body pt-2 __h-100px">
                                        <form
                                            method="POST"
                                            action="http://localhost/sync/pay-u-money-view"
                                        >
                                            <input
                                                type="hidden"
                                                name="_token"
                                                value="EyUQ6ivjTJhVUrRTko8q1W6uRvHZB4MA6r2n1xmK"
                                            />

                                            <button
                                                class="btn btn-block click-if-alone"
                                                style="background-color: #afc61f"
                                                type="submit"
                                            >
                                                <img
                                                    width="200"
                                                    alt="PayUmoney logo"
                                                    title="PayUmoney"
                                                    src="http://localhost/sync/public/assets/front-end/img/PayUmoney_logo.png"
                                                />
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Navigation (desktop)-->
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center mt-5">
                                <a class="btn btn-block bgpink"
                                    href="#">
                                    <span class="d-none d-sm-inline">Back to Shipping</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
        <div class="col-lg-3">
            <div class="card" style="border-radius:0;">
                <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
