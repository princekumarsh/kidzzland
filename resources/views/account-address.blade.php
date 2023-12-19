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

</style>



<div class="container mlr mt-4" style="max-width: -webkit-fill-available;">
    <div class="row">
        <div class="col-lg-3">
            @include('layouts.front-end.partials.profile-aside')
        </div>
        <div class="col-lg-9">
            <h2 class="text-center">Address</h2>
            <div class="card">
                <div class="card-body">
                    <section class="">
                        <!-- Addresses list-->
                        <div class="d-flex justify-content-end mb-3">
                            <button
                                style="width: 182px; font-size: 18px"
                                class="btn axil-btn view-btn"
                                onclick="window.location.href='{{route('addAddress')}}'"
                                id="add_new_address"
                            >
                                Add new address
                            </button>
                        </div>

                        <div class="row g-3">
                            <section class="col-lg-6 col-md-6">
                                <div class="card __shadow h-100">
                                    <div
                                        class="card-header d-flex justify-content-between d-flex align-items-center"
                                    >
                                        <div>
                                            <i
                                                class="fa fa-thumb-tack fa-2x iconHad"
                                                aria-hidden="true"
                                            ></i>
                                        </div>
                                        <div>
                                            <span> Permanent Address (Shipping address) </span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <a
                                                class=""
                                                title="Edit Address"
                                                id="edit"
                                                href="{{route('editAddress')}}"
                                                style="margin-right: 5px"
                                            >
                                                <i class="fa fa-edit fa-lg"></i>
                                            </a>
                                            <a
                                                class=""
                                                title="Delete Address"
                                                href="#"
                                                onclick="return confirm('Are you sure you want to Delete?');"
                                                id="delete"
                                            >
                                                <i class="fa fa-trash fa-lg"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="font-name"><span>prince kumar</span></div>
                                        <div>
                                            <span class="font-nameA">
                                                <strong>Phone :</strong> +918210600193</span
                                            >
                                        </div>
                                        <div>
                                            <span class="font-nameA">
                                                <strong>City :</strong> PATNA</span
                                            >
                                        </div>
                                        <div>
                                            <span class="font-nameA">
                                                <strong> Zip code :</strong> 800027</span
                                            >
                                        </div>
                                        <div>
                                            <span class="font-nameA">
                                                <strong> State :</strong> Meghalaya</span
                                            >
                                        </div>
                                        <div>
                                            <span class="font-nameA">
                                                <strong>Address :</strong> 140, East vishawakarma
                                                colony, khemnichak East vishawakarma colony,
                                                khemnichakk</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </section>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
