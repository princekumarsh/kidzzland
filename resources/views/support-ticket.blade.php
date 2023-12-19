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
    .pink-btn:hover{
        /* background-color:#ED54A4; */
        color:rgb(0, 0, 0);
        border:1px solid#ed54a4
    }
    .pink-btn{
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
            <h2 class="text-center">Support Ticket</h2>
            <div class="card">
                <div class="card-body">

                    <div class="axil-dashboard-order">
                        <div
                            class="table-responsive"
                            style="border: 1px solid #cbd3d9; border-radius: 6px !important"
                        >
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Topic</th>
                                        <th scope="col">Submission date</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <span class="marl">Refund related</span>
                                        </th>
                                        <td><span>2023-10-31 04:03 PM</span></td>
                                        <td><span class="">Complaint</span></td>
                                        <td><span class="">Close</span></td>
                                        <td>
                                            <a
                                                href="{{route('ticketDetails')}}"
                                                class="axil-btn view-btn"
                                                >Details</a
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            <button
                                onclick="window.location.href='http://localhost/sync/add-ticket'"
                                class="btn view-btn pink-btn float-right"
                                style="width: 160px; font-size: 18px"
                            >
                                Add new ticket
                            </button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
