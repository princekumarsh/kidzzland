@extends('layouts.front-end.app')

@section('content')
<style>
    body{
    color: #707070 !important;
    font-family: Averta,Helvetica,Arial,sans-serif;
    }
    @media only screen and (min-width: 600px){
        .mlr {
            margin-left: 200px;
            margin-right: 200px;
        }
    }
    .fs-16{
        font-size: 16px;
    }
    .tile-img{
        max-width: 500px;
    }
    /* user circle */
    .user {
    display: inline-block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    }

    .one {
    background-image: url('https://via.placeholder.com/400x200');
    }

    .two {
    background-image: url('https://via.placeholder.com/200x200');
    }

    .three {
    background-image: url('https://via.placeholder.com/200x400');
    }
    [data-letters]:before {
    content:attr(data-letters);
    display:inline-block;
    font-size:1em;
    width:2.5em;
    height:2.5em;
    line-height:2.5em;
    text-align:center;
    border-radius:50%;
    background:plum;
    vertical-align:middle;
    margin-right:1em;
    color:white;
    }
    [data-letters]:after {
    display:inline-block;
    font-size:1em;
    width:2.5em;
    height:2.5em;
    line-height:2.5em;
    text-align:center;
    border-radius:50%;
    background:plum;
    vertical-align:middle;
    margin-right:1em;
    color:white;
    }
    .mw150{
        max-width: 150px;
    }
    .br-10{
        border-radius:10px;
    }


</style>



<div class="container mlr mt-4" style="max-width: -webkit-fill-available;">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-7 p-2">
                        <img class="tile-img" src="https://static.hopscotch.in/moments/202310/1698767600850e62dd53a-98d0-4e8c-ab6a-555fe_cropd9d9f52.jpeg" alt="">

                    </div>
                    <div class="col-lg-1 p-2">
                        <img src="https://static.hopscotch.in/web2/images/icon-moments-grey.8a3ac705ad9d1d22645a76ef597615f0.svg" alt="">
                    </div>
                    <div class="col-lg-4 p-2" style="border-left:1px solid #e1e0e0;">
                        <div class="row">

                            <a href="{{route('momentProfile')}}">
                                <p data-letters="PP"> Priya Priya</p>
                                <p class="ml-2"> 14m ago</p>
                            </a>
                        </div>
                        <div class="text-center">
                            Shop for Priya's look
                        </div>
                        <div class="img-link text-center">
                            <a href="{{route('product')}}">
                                <img class="mw150 br-10 m-4" src="https://static.hopscotch.in/fstatic/product/202111/ac150257-f255-4663-84c6-3c99b1479de1_full.jpg?version=1635951305178" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
