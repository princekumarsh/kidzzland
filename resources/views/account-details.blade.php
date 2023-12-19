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
            <h2 class="text-center">Account Details</h2>
            <div class="card">
                <div class="card-body">
                    <div class="axil-dashboard-account">
                        <form
                            class="account-details-form"
                            action="http://localhost/sync/user-account-update"
                            method="post"
                            enctype="multipart/form-data"
                        >
                            <input
                                type="hidden"
                                name="_token"
                                value="yXLN97MiNcD0zEsSFcMBkpeKas1hUxVdT5BZcjpq"
                            />
                            <div class="axil-dashboard-author">
                                <div class="media">
                                    <div class="thumbnail">
                                        <img
                                            id="blah"
                                            style="width: 70px"
                                            class="rounded-circle border __inline-48"
                                            onerror="this.src='http://localhost/sync/public/assets/front-end/img/image-place-holder.png'"
                                            src="http://localhost/sync/public/assets/front-end/img/image-place-holder.png"
                                        />
                                    </div>
                                    <div class="media-body">
                                        <h5 class="title mb-0">Hello prince</h5>
                                        <label for="files" class="lhov"
                                            ><span class="joining-date"
                                                >Change your profile pic</span
                                            ></label
                                        >
                                        <input id="files" name="image" hidden="" type="file" />
                                    </div>
                                </div>
                            </div>
                            <br />

                            <div class="row">
                                <div class="col-lg-6 p-2">
                                    <div class="form-group">
                                        <label for="firstName">First name </label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="f_name"
                                            name="f_name"
                                            value="prince"
                                            required=""
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="form-group">
                                        <label for="lastName"> Last name </label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="l_name"
                                            name="l_name"
                                            value="kumar"
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="form-group mb--40">
                                        <label for="inputEmail4" class="blable">Email </label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="account-email"
                                            value="princekumarsh@gmail.com"
                                            disabled=""
                                        />
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2">
                                    <div class="form-group mb--40">
                                        <label for="phone">Phone number </label>
                                        <input
                                            type="number"
                                            class="form-control blable"
                                            id="phone"
                                            name="phone"
                                            value="8210600193"
                                            required=""
                                        />
                                    </div>
                                </div>
                                <div class="col-12 p-2">
                                    <div class="form-group mb--0">
                                        <input
                                            type="submit"
                                            class="axil-btn view-btn"
                                            value="Save Changes"
                                        />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
