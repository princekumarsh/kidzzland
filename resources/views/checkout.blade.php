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
    .axil-checkout-login {
        border: 1px solid #cbcbcb;
        border-radius: 16px;
        padding: 30px;
        transition: 0.2s;
    }

    .axil-checkout-login:hover {
        transform: scale(1.02);
        box-shadow: 8px 8px 8px #44524c;
        transition: 0.2s;
    }

    .axil-checkout-login:click {
        transform: scale(1.02);
        box-shadow: 8px 8px 8px #44524c;
        transition: 0.2s;
    }
    .steps-light .step-item.active .step-count,
    .steps-light .step-item.active .step-progress {
        color: #fff;
        background-color: #7ec024;
    }

    .steps-light .step-count,
    .steps-light .step-progress {
        color: #4f4f4f;
        background-color: rgba(225, 225, 225, 0.67);
    }

    .steps-light .step-item.active.current {
        color: #7ec024 !important;
        pointer-events: none;
    }

    .steps-light .step-item {
        color: #4f4f4f;
        font-size: 14px;
        font-weight: 400;
    }
    b{
        color: #787878;
    }
</style>

<div class="container mt-3 mlr" style="max-width: -webkit-fill-available;">
    <div class="row">
        <div class="col-lg-9">
            <div class="bg-light clearfix container">
                <div class=" float-start"><h2>Checkout</h2></div>
            </div>
            <div class="safetxt p-2 fs-14">
                <i class="fa-solid fa-circle-info"></i>
                100% Safe and Assured Delivery at your doorstep.
            </div>
            {{-- test code --}}

            <section class="ffdm">
                <div class="checkout_details">
                    <h2 class="h4 p-2 mb-2 mt-2">Choose shipping address</h2>

                    <form method="post" class="card" id="address-form">
                        <div class="axil-checkout-login toggle-open address_clicl" onclick="$('#sh-17').prop( 'checked', true )"
                            style="display: block; margin: 7px 20px">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="shipping_method_id" id="sh-17" value="17"
                                    checked="" />
                                <label class="form-check-label" for="flexRadioDefault1">
                                    permanent
                                    <span style="margin-left: 25px"><i class="fa fa-phone"></i></span>
                                    <b>+91 +918210600193</b>
                                </label>
                            </div>

                            <div style="margin-left: 23px" class="mt-2">
                                <p>
                                    Name: <b>prince kumar</b>
                                    <br />
                                    Address :
                                    <b>140, East vishawakarma colony, khemnichak East
                                        vishawakarma colony, khemnichakk, PATNA, 800027.</b>
                                </p>
                            </div>
                        </div>
                        <br />

                        <div class="list-group-item" style="margin-left:20px;">
                            <button type="button" class="btn btn-outline btn-sm add_new_address" data-toggle="collapse" style="
                                    width: 147px;
                                    height: 36px;
                                    background: #000;
                                    font-size: 16px;
                                    border-radius: 16px;
                                    color: white;
                                " id="addbtn">
                                Another Address
                            </button>
                            <div id="accordion" class="hidden_new_address" style="margin-top: 6px">
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="blable">Full name
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="contact_person_name" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label class="blable" for="exampleInputEmail1">Phone
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="phone" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label class="blable" for="exampleInputPassword1">Address Type</label>
                                                    <select class="form-control" name="address_type">
                                                        <option value="permanent">
                                                            Permanent
                                                        </option>
                                                        <option value="home">Home</option>
                                                        <option value="others">
                                                            Others
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label class="blable" for="exampleInputEmail1">City<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="city" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <label class="blable" for="exampleInputEmail1">Zip code
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="zip" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="country" value="India" />
                                                    <label class="blable" for="exampleInputEmail1">State
                                                        <span style="color: red">*</span></label>
                                                    <select name="state" id="" class="form-control js-example-basic-single"
                                                        data-live-search="true" required="">
                                                        <option value="Meghalaya">
                                                            Meghalaya
                                                        </option>
                                                        <option value="Haryana">
                                                            Haryana
                                                        </option>
                                                        <option value="Maharashtra">
                                                            Maharashtra
                                                        </option>
                                                        <option value="Goa">Goa</option>
                                                        <option value="Manipur">
                                                            Manipur
                                                        </option>
                                                        <option value="Puducherry">
                                                            Puducherry
                                                        </option>
                                                        <option value="Telangana">
                                                            Telangana
                                                        </option>
                                                        <option value="Odisha">
                                                            Odisha
                                                        </option>
                                                        <option value="Rajasthan">
                                                            Rajasthan
                                                        </option>
                                                        <option value="Punjab">
                                                            Punjab
                                                        </option>
                                                        <option value="Uttarakhand">
                                                            Uttarakhand
                                                        </option>
                                                        <option value="Andhra Pradesh">
                                                            Andhra Pradesh
                                                        </option>
                                                        <option value="Nagaland">
                                                            Nagaland
                                                        </option>
                                                        <option value="Lakshadweep">
                                                            Lakshadweep
                                                        </option>
                                                        <option value="Himachal Pradesh">
                                                            Himachal Pradesh
                                                        </option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Uttar Pradesh">
                                                            Uttar Pradesh
                                                        </option>
                                                        <option value="Andaman and Nicobar Islands">
                                                            Andaman and Nicobar Islands
                                                        </option>
                                                        <option value="Arunachal Pradesh">
                                                            Arunachal Pradesh
                                                        </option>
                                                        <option value="Jharkhand">
                                                            Jharkhand
                                                        </option>
                                                        <option value="Karnataka">
                                                            Karnataka
                                                        </option>
                                                        <option value="Assam">Assam</option>
                                                        <option value="Kerala">
                                                            Kerala
                                                        </option>
                                                        <option value="Jammu and Kashmir">
                                                            Jammu and Kashmir
                                                        </option>
                                                        <option value="Gujarat">
                                                            Gujarat
                                                        </option>
                                                        <option value="Chandigarh">
                                                            Chandigarh
                                                        </option>
                                                        <option value="Dadra and Nagar Haveli and Daman and Diu">
                                                            Dadra and Nagar Haveli and Daman
                                                            and Diu
                                                        </option>
                                                        <option value="Sikkim">
                                                            Sikkim
                                                        </option>
                                                        <option value="Tamil Nadu">
                                                            Tamil Nadu
                                                        </option>
                                                        <option value="Mizoram">
                                                            Mizoram
                                                        </option>
                                                        <option value="Bihar">Bihar</option>
                                                        <option value="Tripura">
                                                            Tripura
                                                        </option>
                                                        <option value="Madhya Pradesh">
                                                            Madhya Pradesh
                                                        </option>
                                                        <option value="Chhattisgarh">
                                                            Chhattisgarh
                                                        </option>
                                                        <option value="Ladakh">
                                                            Ladakh
                                                        </option>
                                                        <option value="West Bengal">
                                                            West Bengal
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="blable" for="exampleInputEmail1">Address<span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" id="address" type="text" name="address"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn--primary" style="display: none"
                                            id="address_submit"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                    </form>

                    <div id="add">
                        <!-- billing methods table-->
                        <form method="post" class="card __card" id="billing-address-form">
                            <div id="hide_billing_address" class="card-body p-0">
                                <ul class="list-group">
                                    <li class="list-group-item" onclick="billingAddress()">
                                        <input type="radio" name="billing_method_id" id="bh-0" value="0" data-toggle="collapse"
                                            data-target="#billing_model" checked="" />

                                        <span class="checkmark" style="margin-right: 10px"></span>

                                        <button type="button" class="btn btn-outline" data-toggle="collapse"
                                            data-target="#billing_model">
                                            Another Address
                                        </button>
                                        <div id="accordion ">
                                            <div id="billing_model" class="collapse show" aria-labelledby="headingThree"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6 p-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Contact person name
                                                                    <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="billing_contact_person_name"
                                                                    required="" />
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6 col-sm-6 p-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Phone
                                                                    <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="billing_phone" required="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6  p-2">
                                                            <div class="form-group ">
                                                                <label for="exampleInputPassword1">Address Type</label>
                                                                <select class="form-control" name="billing_address_type">
                                                                    <option value="permanent">
                                                                        Permanent
                                                                    </option>
                                                                    <option value="home">
                                                                        Home
                                                                    </option>
                                                                    <option value="others">
                                                                        Others
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6 p-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">City<span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="billing_city" required="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-6 p-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Zip code
                                                                    <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="billing_zip" required="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-6 p-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">State
                                                                    <span style="color: red">*</span></label>
                                                                <div class="dropdown bootstrap-select">
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>State</option>
                                                                        <option value="1">bihar</option>
                                                                        <option value="2">madhya pradesh</option>
                                                                        <option value="3">jharkhand</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>





                                                    <div class="form-group ">
                                                        <label for="exampleInputEmail1">Address<span
                                                                class="text-danger">*</span></label>
                                                        <textarea class="form-control" id="billing_address" type="billing_text"
                                                            name="billing_address" required=""></textarea>
                                                    </div>


                                                    <div class="form-check p-2">
                                                        <input type="checkbox" name="save_address_billing" checked=""
                                                            class="form-check-input" id="save_address_billing" />
                                                        <label class="form-check-label" for="save_address_billing"
                                                            >
                                                            Save this address
                                                        </label>
                                                    </div>
                                                    <input type="hidden" id="billing_latitude" name="billing_latitude"
                                                        class="form-control d-inline" placeholder="Ex : -94.22213"
                                                        value="25.57279818015553" required="" readonly="" />
                                                    <input type="hidden" name="billing_longitude" class="form-control"
                                                        placeholder="Ex : 103.344322" id="billing_longitude"
                                                        value="85.15278043838492" required="" readonly="" />

                                                    <button type="submit" class="btn btn--primary" style="display: none"
                                                        id="address_submit"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>

                    <!-- Navigation (desktop)-->
                </div>
            </section>



            {{-- test code --}}
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
                            <button class="fw-600" style="border:none;background:none;color:#fff;" onclick="window.location.href='{{route('checkoutPayment')}}'"> PAY ₹4,354 </button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#add').hide();
    // $('#addbtn').click(function(){
    //  $('#add').show("slide", { direction: "right" }, 1000);
    // });

    $("#addbtn").click(function(){
        $('#add').slideToggle('slow');
    });


</script>
@endsection
