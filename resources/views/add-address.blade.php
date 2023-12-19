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
        font-weight: 500;
        display: inline-block;
        padding: 2px 10px;
        position: relative;
        transition: all .3s ease-in-out;
        z-index: 1;
    }
    .axil-btn:hover{
        background-color:#ED54A4;
        color:white;
        border:1px solid#ed54a4
    }
    .form-group label {
        margin-bottom: 6px;
        font-size: 14px;
        line-height: 22px;
        font-weight: 500;
        color: #777777;
    }

</style>



<div class="container mlr mt-4" style="max-width: -webkit-fill-available;">
    <div class="row">
        <div class="col-lg-3">
            @include('layouts.front-end.partials.profile-aside')
        </div>
        <div class="col-lg-9">
            <h2 class="text-center">Add Address</h2>
            <div class="card">
                <div class="card-body">
                    <form action="http://localhost/sync/account-address-store" method="post">
                        <input
                            type="hidden"
                            name="_token"
                            value="ksYzsBA8zRqWu8GALJXEpvzRwROIqm1vC9a146QE"/>
                        <div class="row">
                            <div class="col-6">
                                <ul class="donate-now">
                                    <li>
                                        <input
                                            type="radio"
                                            id="a50"
                                            name="addressAs"
                                            value="home"
                                        />
                                        <label for="a50" class="component">Home</label>
                                    </li>
                                    <li>
                                        <input
                                            type="radio"
                                            id="a75"
                                            name="addressAs"
                                            value="office"
                                            checked="checked"
                                        />
                                        <label for="a75" class="component">Office</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="donate-now">
                                    <li>
                                        <input
                                            type="radio"
                                            name="is_billing"
                                            id="b25"
                                            value="0"
                                            checked=""
                                        />
                                        <label for="b25" class="billing_component">Shipping</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 p-2">
                                <div class="form-group">
                                    <label for="firstName">Name </label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="name"
                                        name="name"
                                        required=""
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6 p-2">
                                <div class="form-group">
                                    <label for="lastName"> Phone</label>
                                    <input
                                        class="form-control"
                                        type="number"
                                        id="phone"
                                        name="phone"
                                        required=""
                                    />
                                </div>
                            </div>
                            <div class="col-6 p-2">
                                <div class="form-group">
                                    <label for="lastName"> Address</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        name="address"
                                        id="address"
                                        required=""
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6 p-2">
                                <div class="form-group">
                                    <label for="lastName"> Zip code</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="zip"
                                        name="zip"
                                        required=""
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6 p-2">
                                <div class="form-group">
                                    <label for="lastName"> City</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="address-city"
                                        name="city"
                                        required=""
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6 p-2">
                                <div class="form-group">
                                    <input
                                        type="hidden"
                                        id="country"
                                        name="country"
                                        value="India"
                                    />
                                    <label for="state"> State</label>
                                    <select
                                        name="state"
                                        id=""
                                        class="form-control"
                                        data-live-search="true"
                                        required=""
                                    >
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">
                                            Andaman and Nicobar Islands
                                        </option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Dadra and Nagar Haveli and Daman and Diu">
                                            Dadra and Nagar Haveli and Daman and Diu
                                        </option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Ladakh">Ladakh</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 p-2">
                                <div class="form-group mb--0">
                                    <input type="submit" class="axil-btn" value="Save Changes" />
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
