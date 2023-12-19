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
            <h2 class="text-center">Ticket details</h2>
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
                                        <th scope="col">Date submitted</th>
                                        <th scope="col">Last updated</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Priority</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">2023-10-10</th>
                                        <td>2023-10-10</td>
                                        <td>Complaint</td>
                                        <td>Urgent</td>
                                        <td>
                                            <span class="badge btn btn-secondary">close</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="">
                                <div class="container">
                                    <div class="media __incoming-msg">
                                        <img
                                            class="rounded-circle __img-40"
                                            style="width: 70px; text-align: right"
                                            onerror="this.src='http://localhost/sync/public/assets/front-end/img/image-place-holder.png'"
                                            src="http://localhost/sync/public/assets/front-end/img/image-place-holder.png"
                                            alt="prince"
                                        />
                                        <div class="media-body">
                                            <h6 class="font-size-md mb-2">prince</h6>
                                            <p class="font-size-md mb-1">
                                                Sir please help me get my refund for the order id
                                                100020
                                            </p>
                                            <span class="font-size-ms text-muted">
                                                <i class="czi-time align-middle mr-2"></i>
                                                2023-10-10 04:03 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="container border-0">
                                    <form
                                        class="needs-validation"
                                        href="http://localhost/sync/support-ticket/1"
                                        method="post"
                                        novalidate=""
                                    >
                                        <input
                                            type="hidden"
                                            name="_token"
                                            value="ksYzsBA8zRqWu8GALJXEpvzRwROIqm1vC9a146QE"
                                        />
                                        <div class="form-group">
                                            <textarea
                                                class="form-control"
                                                name="comment"
                                                rows="8"
                                                placeholder="Write your message here..."
                                                required=""
                                            ></textarea>
                                            <div class="invalid-tooltip">
                                                Please write the message!
                                            </div>
                                        </div>

                                        <div class="row justify-content mt-4 m-4 for-mobile-glaxy __gap-6px flex-nowrap">
                                            <a href="" class="col-6 btn btn-warning btn-lg for-glaxy-mobile w-50" style="font-size: 16px">
                                                Close
                                            </a>
                                            <a class="col-6 btn btn-lg btn-primary text-white w-49" type="button" style="font-size: 16px; margin-left: 6px;background-color:#ED54a4;border:1px solid #ed54a4" href="">
                                                Submit message
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
