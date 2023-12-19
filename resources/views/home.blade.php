@extends('layouts.front-end.app')

@section('content')

    <div class="" style="margin: 50px;">
        <div class="row">

            {{-- 1st --}}
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="columns boutique-tile masonry-brick ng-scope">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">
                                    <a

                                        class="ng-isolate-scope"
                                        href="{{route('shop')}}">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/633068d3-052e-4ecd-af4c-81620961c7ff_full.jpg?version=1697278664489&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/633068d3-052e-4ecd-af4c-81620961c7ff_full.jpg?version=1697278664489&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="100px" class="ng-isolate-scope"
                                            style="width: 100%;height: auto;opacity: 1;transition: opacity 1s ease-in-out 0s;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </new-custom-tile>
                </div>
                <div class="columns boutique-tile masonry-brick ng-scope"
                    ng-class="{'store-tile': boutique.type === 'STORE'}">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">
                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">
                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/b3d7746d-e7f1-405c-b0c6-30a1b10f2d65_full.jpg?version=1697205708029&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/b3d7746d-e7f1-405c-b0c6-30a1b10f2d65_full.jpg?version=1697205708029&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="8.75px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/22848/partywear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/22848/Partywear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/22848/partywear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/ffcf8184-d0c0-4bea-b308-9520fe18effa_full.jpg?version=1697205713580&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/ffcf8184-d0c0-4bea-b308-9520fe18effa_full.jpg?version=1697205713580&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="124.58333333333333px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/37401/outerwear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37401/Outerwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37401/outerwear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/84f7c5c7-4cec-4ea7-b1c9-eb3401b89bab_full.jpg?version=1697205718055&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/84f7c5c7-4cec-4ea7-b1c9-eb3401b89bab_full.jpg?version=1697205718055&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="124.58333333333333px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>
                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/36854/matchy+sets?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36854/Matchy+Sets"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36854/matchy+sets?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/c3061576-d385-48f4-8b01-d7b7ae653794_full.jpg?version=1697205721264&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/c3061576-d385-48f4-8b01-d7b7ae653794_full.jpg?version=1697205721264&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="124.58333333333333px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/36965/onepieces?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36965/Onepieces"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36965/onepieces?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/1c6ef692-9cac-4930-9833-3ba98dc238ce_full.jpg?version=1697205725737&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/1c6ef692-9cac-4930-9833-3ba98dc238ce_full.jpg?version=1697205725737&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="126.25px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/25168/ethnicwear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/25168/Ethnicwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/25168/ethnicwear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/84f3eb2b-6878-4b47-ac82-339cd6b1b83e_full.jpg?version=1697205728540&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/84f3eb2b-6878-4b47-ac82-339cd6b1b83e_full.jpg?version=1697205728540&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="126.25px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/22845/footwear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/22845/Footwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/22845/footwear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/aac9d6f8-1ea8-4075-a769-5c0402812b13_full.jpg?version=1697205731616&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/aac9d6f8-1ea8-4075-a769-5c0402812b13_full.jpg?version=1697205731616&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="126.25px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/37400/outerwear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37400/Outerwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37400/outerwear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/13a1a4b7-8d1a-4aed-bfa1-418811b629c7_full.jpg?version=1697205735392&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/13a1a4b7-8d1a-4aed-bfa1-418811b629c7_full.jpg?version=1697205735392&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="128.75px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/36331/tees+and+shirts?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36331/Tees+and+Shirts"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36331/tees+and+shirts?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/a04c5257-1284-4c89-a844-e7f8d8ebfd70_full.jpg?version=1697205738466&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/a04c5257-1284-4c89-a844-e7f8d8ebfd70_full.jpg?version=1697205738466&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="128.75px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/33437/nightwear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/33437/Nightwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/33437/nightwear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/6ed6ca3a-fb0c-43f5-83be-821362942954_full.jpg?version=1697205741532&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/6ed6ca3a-fb0c-43f5-83be-821362942954_full.jpg?version=1697205741532&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="128.75px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/25175/bottoms?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/25175/Bottoms"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/25175/bottoms?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/b8f2659a-c6ad-4727-b936-0d5e9fbd2909_full.jpg?version=1697205745594&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/b8f2659a-c6ad-4727-b936-0d5e9fbd2909_full.jpg?version=1697205745594&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="117.08333333333334px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36336/innerwear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36336/Innerwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36336/innerwear?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/53252787-97d6-4d9e-bfe7-3318e3b3e5b3_full.jpg?version=1697205748902&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/53252787-97d6-4d9e-bfe7-3318e3b3e5b3_full.jpg?version=1697205748902&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="117.08333333333334px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36967/add-ons?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36967/Add-Ons"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36967/add-ons?funnel=Discover&amp;funnel_tile=CT72886&amp;funnel_section=New&amp;section=New&amp;subsection=CT72886&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/6eb0818f-25df-4e7b-ae51-6d0184af5092_full.jpg?version=1697205751435&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/6eb0818f-25df-4e7b-ae51-6d0184af5092_full.jpg?version=1697205751435&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="117.08333333333334px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>

                        </div>
                    </new-custom-tile>
                </div>
                <div class="columns boutique-tile masonry-brick ng-scope"
                    ng-class="{'store-tile': boutique.type === 'STORE'}">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">

                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">
                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/ad33d145-6b20-41b0-9a26-dd951a84b648_full.jpg?version=1697197682245&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/ad33d145-6b20-41b0-9a26-dd951a84b648_full.jpg?version=1697197682245&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="8.333333333333332px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/37064/jackets+and+long+coats?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37064/Jackets+and+Long+Coats"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37064/jackets+and+long+coats?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/d5d87931-6b37-41d5-bc10-15094f32d511_full.jpg?version=1697197734467&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/d5d87931-6b37-41d5-bc10-15094f32d511_full.jpg?version=1697197734467&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="139.16666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/37336/party+picks?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37336/Party+Picks"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37336/party+picks?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/9232a22f-308a-40de-af21-6fcd7f0fa6b7_full.jpg?version=1697197737174&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/9232a22f-308a-40de-af21-6fcd7f0fa6b7_full.jpg?version=1697197737174&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="139.16666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/37045/onesies?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37045/Onesies"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37045/onesies?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/ae598153-92b4-4340-bf27-fca5e4c2064e_full.jpg?version=1697197740481&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/ae598153-92b4-4340-bf27-fca5e4c2064e_full.jpg?version=1697197740481&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="139.16666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/37071/sweaters+and+more?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37071/Sweaters+and+More"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37071/sweaters+and+more?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/c6ee2b2c-ca35-4532-ac56-1e13b2dfb2d6_full.jpg?version=1697197746300&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/c6ee2b2c-ca35-4532-ac56-1e13b2dfb2d6_full.jpg?version=1697197746300&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="138.75px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/37046/dresses+and+more?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37046/Dresses+And+More"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37046/dresses+and+more?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New">
                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/868adcdd-d63e-415f-96e3-dee2ff54d55d_full.jpg?version=1697197750511&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/868adcdd-d63e-415f-96e3-dee2ff54d55d_full.jpg?version=1697197750511&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="138.75px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/37337/ethnics?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37337/Ethnics"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37337/ethnics?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/8b7c569a-c976-4358-a61c-d3b0a5380566_full.jpg?version=1697265193664&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/8b7c569a-c976-4358-a61c-d3b0a5380566_full.jpg?version=1697265193664&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="138.75px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/37048/casuals?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37048/Casuals"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37048/casuals?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/b23e23e0-77b0-43b0-bdba-f712f4c7f23b_full.jpg?version=1697197760623&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/b23e23e0-77b0-43b0-bdba-f712f4c7f23b_full.jpg?version=1697197760623&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="131.66666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/37049/shoes+and+add-ons?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37049/Shoes+and+Add-ons"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37049/shoes+and+add-ons?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/229a98a5-33de-4ec7-a9a7-96a0e7e2e5b2_full.jpg?version=1697197764523&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/229a98a5-33de-4ec7-a9a7-96a0e7e2e5b2_full.jpg?version=1697197764523&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="131.66666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/37079/winter+add-ons?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37079/Winter+Add-ons"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37079/winter+add-ons?funnel=Discover&amp;funnel_tile=CT72894&amp;funnel_section=New&amp;section=New&amp;subsection=CT72894&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/629b559d-14a4-43ae-9c41-46732f063eb3_full.jpg?version=1697197768587&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/629b559d-14a4-43ae-9c41-46732f063eb3_full.jpg?version=1697197768587&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="131.66666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </new-custom-tile>
                </div>
                <div class="columns boutique-tile masonry-brick ng-scope"
                    ng-class="{'store-tile': boutique.type === 'STORE'}">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">

                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/58f93810-68e0-4e22-b9ed-41808c3a169f_full.jpg?version=1697434859099&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/58f93810-68e0-4e22-b9ed-41808c3a169f_full.jpg?version=1697434859099&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="10.555555555555555px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36847/under+299?funnel=Discover&amp;funnel_tile=CT72900&amp;funnel_section=New&amp;section=New&amp;subsection=CT72900&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36847/Under+299"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36847/under+299?funnel=Discover&amp;funnel_tile=CT72900&amp;funnel_section=New&amp;section=New&amp;subsection=CT72900&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/4c52fca3-8be8-41a0-9d9a-16eafd6a3736_full.jpg?version=1697173477408&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/4c52fca3-8be8-41a0-9d9a-16eafd6a3736_full.jpg?version=1697173477408&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="96.25px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36846/under+699?funnel=Discover&amp;funnel_tile=CT72900&amp;funnel_section=New&amp;section=New&amp;subsection=CT72900&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36846/Under+699"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36846/under+699?funnel=Discover&amp;funnel_tile=CT72900&amp;funnel_section=New&amp;section=New&amp;subsection=CT72900&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/d1a13033-cafa-4b86-a3a6-c6bd651051dc_full.jpg?version=1697173480549&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/d1a13033-cafa-4b86-a3a6-c6bd651051dc_full.jpg?version=1697173480549&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="96.25px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36845/under+999?funnel=Discover&amp;funnel_tile=CT72900&amp;funnel_section=New&amp;section=New&amp;subsection=CT72900&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36845/Under+999"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36845/under+999?funnel=Discover&amp;funnel_tile=CT72900&amp;funnel_section=New&amp;section=New&amp;subsection=CT72900&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/f22c46db-7984-4f87-856b-e24e43f38b62_full.jpg?version=1697173483064&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/f22c46db-7984-4f87-856b-e24e43f38b62_full.jpg?version=1697173483064&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="96.25px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </new-custom-tile>
                </div>
                <div></div>
                <div></div>
            </div>

            {{-- 2nd --}}
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="columns boutique-tile masonry-brick ng-scope"
                    ng-class="{'store-tile': boutique.type === 'STORE'}">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">

                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/19f95f2f-c087-4b19-b70c-5044891768c5_full.jpg?version=1697182770015&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/19f95f2f-c087-4b19-b70c-5044891768c5_full.jpg?version=1697182770015&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="8.645833333333334px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 50%;">

                                    <a ng-href="/products/24904/new5?funnel=Discover&amp;funnel_tile=CT72876&amp;funnel_section=New&amp;section=New&amp;subsection=CT72876&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/24904/NEW5"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/24904/new5?funnel=Discover&amp;funnel_tile=CT72876&amp;funnel_section=New&amp;section=New&amp;subsection=CT72876&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/66f31630-42e4-4d29-b3ce-0f0839b6fbe4_full.jpg?version=1697182773166&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/66f31630-42e4-4d29-b3ce-0f0839b6fbe4_full.jpg?version=1697182773166&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="44.583333333333336px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 50%;">

                                    <a ng-href="/products/30993/new200?funnel=Discover&amp;funnel_tile=CT72876&amp;funnel_section=New&amp;section=New&amp;subsection=CT72876&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/30993/NEW200"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/30993/new200?funnel=Discover&amp;funnel_tile=CT72876&amp;funnel_section=New&amp;section=New&amp;subsection=CT72876&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/c55855d6-d1e4-4171-ab37-28c5a4cde01b_full.jpg?version=1697182775510&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/c55855d6-d1e4-4171-ab37-28c5a4cde01b_full.jpg?version=1697182775510&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="44.583333333333336px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="/collections/t_n_c_nbgu_2022_all?funnel=Discover&amp;funnel_tile=CT72876&amp;funnel_section=New&amp;section=New&amp;subsection=CT72876&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/collections/T_n_C_NBGU_2022_ALL"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/collections/t_n_c_nbgu_2022_all?funnel=Discover&amp;funnel_tile=CT72876&amp;funnel_section=New&amp;section=New&amp;subsection=CT72876&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/8aa08f56-dbe3-44be-b4dc-008551659e9c_full.jpg?version=1697182778701&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/8aa08f56-dbe3-44be-b4dc-008551659e9c_full.jpg?version=1697182778701&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="4.270833333333333px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>

                        </div>
                    </new-custom-tile>
                </div>
                <div class="columns boutique-tile masonry-brick ng-scope"
                    ng-class="{'store-tile': boutique.type === 'STORE'}">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">

                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/f3ff20c6-5ddc-44dc-8006-634fce479f0b_full.jpg?version=1697104585182&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/f3ff20c6-5ddc-44dc-8006-634fce479f0b_full.jpg?version=1697104585182&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="10.694444444444445px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 50%;">

                                    <a ng-href="/products/36420/navratri+glam?funnel=Discover&amp;funnel_tile=CT72936&amp;funnel_section=New&amp;section=New&amp;subsection=CT72936&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36420/Navratri+Glam"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36420/navratri+glam?funnel=Discover&amp;funnel_tile=CT72936&amp;funnel_section=New&amp;section=New&amp;subsection=CT72936&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/520bd702-5bd4-4990-85bd-3b674fd3af1c_full.jpg?version=1697104589217&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/520bd702-5bd4-4990-85bd-3b674fd3af1c_full.jpg?version=1697104589217&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="90px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 50%;">

                                    <a ng-href="/products/36530/trendy+footwear?funnel=Discover&amp;funnel_tile=CT72936&amp;funnel_section=New&amp;section=New&amp;subsection=CT72936&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36530/Trendy+Footwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36530/trendy+footwear?funnel=Discover&amp;funnel_tile=CT72936&amp;funnel_section=New&amp;section=New&amp;subsection=CT72936&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/a167652f-e2e1-46ed-8183-cf82aba8529c_full.jpg?version=1697104591977&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/a167652f-e2e1-46ed-8183-cf82aba8529c_full.jpg?version=1697104591977&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="90px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 50%;">

                                    <a ng-href="/collection/73661/halloween?funnel=Discover&amp;funnel_tile=CT72936&amp;funnel_section=New&amp;section=New&amp;subsection=CT72936&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/collection/73661/Halloween"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/collection/73661/halloween?funnel=Discover&amp;funnel_tile=CT72936&amp;funnel_section=New&amp;section=New&amp;subsection=CT72936&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/1b4f4338-8664-4f3d-b04a-a1054e955b99_full.jpg?version=1697104595989&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/1b4f4338-8664-4f3d-b04a-a1054e955b99_full.jpg?version=1697104595989&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="92.5px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 50%;">

                                    <a ng-href="/products/37213/athleisure+wear?funnel=Discover&amp;funnel_tile=CT72936&amp;funnel_section=New&amp;section=New&amp;subsection=CT72936&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37213/Athleisure+Wear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37213/athleisure+wear?funnel=Discover&amp;funnel_tile=CT72936&amp;funnel_section=New&amp;section=New&amp;subsection=CT72936&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/23033751-9396-4250-b67b-db996bff1a4a_full.jpg?version=1697104599386&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/23033751-9396-4250-b67b-db996bff1a4a_full.jpg?version=1697104599386&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="92.5px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>

                        </div>
                    </new-custom-tile>
                </div>
                <div class="columns boutique-tile masonry-brick ng-scope"
                    ng-class="{'store-tile': boutique.type === 'STORE'}">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">

                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/afceeeda-cddd-42b2-a977-df86f1101d23_full.jpg?version=1697185884149&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/afceeeda-cddd-42b2-a977-df86f1101d23_full.jpg?version=1697185884149&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="10.416666666666668px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="/products/32690/shop+all?funnel=Discover&amp;funnel_tile=CT72898&amp;funnel_section=New&amp;section=New&amp;subsection=CT72898&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/32690/Shop+ALL"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/32690/shop+all?funnel=Discover&amp;funnel_tile=CT72898&amp;funnel_section=New&amp;section=New&amp;subsection=CT72898&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/66611ca5-da1c-44bf-a355-64f016b9f446_full.jpg?version=1697185890274&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/66611ca5-da1c-44bf-a355-64f016b9f446_full.jpg?version=1697185890274&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="42.70833333333333px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/31957/easy+changes?funnel=Discover&amp;funnel_tile=CT72898&amp;funnel_section=New&amp;section=New&amp;subsection=CT72898&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/31957/Easy+Changes"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/31957/easy+changes?funnel=Discover&amp;funnel_tile=CT72898&amp;funnel_section=New&amp;section=New&amp;subsection=CT72898&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/b0e181f7-e222-49b4-b8a7-d3429c361d79_full.jpg?version=1697185896603&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/b0e181f7-e222-49b4-b8a7-d3429c361d79_full.jpg?version=1697185896603&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="97.8125px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/31960/baby+must+-+haves?funnel=Discover&amp;funnel_tile=CT72898&amp;funnel_section=New&amp;section=New&amp;subsection=CT72898&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/31960/Baby+must+-+haves"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/31960/baby+must+-+haves?funnel=Discover&amp;funnel_tile=CT72898&amp;funnel_section=New&amp;section=New&amp;subsection=CT72898&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/cf82271f-b93c-4b45-bffa-f6e651e60483_full.jpg?version=1697185900029&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/cf82271f-b93c-4b45-bffa-f6e651e60483_full.jpg?version=1697185900029&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="97.8125px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/31963/baby+accessories?funnel=Discover&amp;funnel_tile=CT72898&amp;funnel_section=New&amp;section=New&amp;subsection=CT72898&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/31963/Baby+Accessories"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/31963/baby+accessories?funnel=Discover&amp;funnel_tile=CT72898&amp;funnel_section=New&amp;section=New&amp;subsection=CT72898&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/e27959e3-60cd-4ea0-a4cb-f184823e175a_full.jpg?version=1697185906173&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/e27959e3-60cd-4ea0-a4cb-f184823e175a_full.jpg?version=1697185906173&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="97.8125px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="/products/32690/shop+all?funnel=Discover&amp;funnel_tile=CT72898&amp;funnel_section=New&amp;section=New&amp;subsection=CT72898&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/32690/Shop+ALL"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/32690/shop+all?funnel=Discover&amp;funnel_tile=CT72898&amp;funnel_section=New&amp;section=New&amp;subsection=CT72898&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/5f4cc42c-cc33-465c-8e4e-a7d09f375e01_full.jpg?version=1697185910985&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/5f4cc42c-cc33-465c-8e4e-a7d09f375e01_full.jpg?version=1697185910985&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="13.020833333333334px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>

                        </div>
                    </new-custom-tile>
                </div>
                <div class="columns boutique-tile masonry-brick ng-scope"
                    ng-class="{'store-tile': boutique.type === 'STORE'}">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">

                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/8d553b97-d50c-410d-8fd9-9270d5d9c04e_full.jpg?version=1697171974238&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/8d553b97-d50c-410d-8fd9-9270d5d9c04e_full.jpg?version=1697171974238&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="8.125px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/46bdc7b8-7439-4fd4-abd6-89b182a1681e_full.jpg?version=1697171984213&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/46bdc7b8-7439-4fd4-abd6-89b182a1681e_full.jpg?version=1697171984213&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="40.49844236760124px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="https://www.instagram.com/hopscotch.in/?funnel=Discover&amp;funnel_tile=CT72904&amp;funnel_section=New&amp;section=New&amp;subsection=CT72904&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="https://www.instagram.com/hopscotch.in/"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="https://www.instagram.com/hopscotch.in/?funnel=Discover&amp;funnel_tile=CT72904&amp;funnel_section=New&amp;section=New&amp;subsection=CT72904&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/f2247ae5-c53b-45c1-ac9b-7139c7d15b65_full.jpg?version=1697171987789&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/f2247ae5-c53b-45c1-ac9b-7139c7d15b65_full.jpg?version=1697171987789&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="40.75235109717868px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/collections/hopscotch_story?funnel=Discover&amp;funnel_tile=CT72904&amp;funnel_section=New&amp;section=New&amp;subsection=CT72904&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/collections/Hopscotch_Story"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/collections/hopscotch_story?funnel=Discover&amp;funnel_tile=CT72904&amp;funnel_section=New&amp;section=New&amp;subsection=CT72904&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/c3ac67cb-e508-4efa-8777-6c9854cf1209_full.jpg?version=1697172130708&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/c3ac67cb-e508-4efa-8777-6c9854cf1209_full.jpg?version=1697172130708&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="40.625px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </new-custom-tile>
                </div>
                <div class="columns boutique-tile masonry-brick ng-scope"
                    ng-class="{'store-tile': boutique.type === 'STORE'}">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">

                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/3bb8337f-1d1f-4e3d-b406-50160dd0b7dd_full.jpg?version=1697107005842&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/3bb8337f-1d1f-4e3d-b406-50160dd0b7dd_full.jpg?version=1697107005842&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="7.361111111111112px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/product/1154049/litianda-girls-purple-solid-slim-fit-t-shirt-and-shorts-set-with-belt?funnel=Discover&amp;funnel_tile=CT72906&amp;funnel_section=New&amp;section=New&amp;subsection=CT72906&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/product/1154049/litianda-girls-purple-solid-slim-fit-t-shirt-and-shorts-set-with-belt"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/product/1154049/litianda-girls-purple-solid-slim-fit-t-shirt-and-shorts-set-with-belt?funnel=Discover&amp;funnel_tile=CT72906&amp;funnel_section=New&amp;section=New&amp;subsection=CT72906&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/4a7f9821-0c3c-4ed4-896f-dc5c22f54c2f_full.jpg?version=1697107010102&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/4a7f9821-0c3c-4ed4-896f-dc5c22f54c2f_full.jpg?version=1697107010102&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="114.99999999999999px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/product/1206261/lsmz-boys-multi-coloured-all-over-print-shirt-and-short-set?funnel=Discover&amp;funnel_tile=CT72906&amp;funnel_section=New&amp;section=New&amp;subsection=CT72906&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/product/1206261/lsmz-boys-multi-coloured-all-over-print-shirt-and-short-set"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/product/1206261/lsmz-boys-multi-coloured-all-over-print-shirt-and-short-set?funnel=Discover&amp;funnel_tile=CT72906&amp;funnel_section=New&amp;section=New&amp;subsection=CT72906&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/3821fe9b-0e60-4c5d-926d-9a2ecd83bbb6_full.jpg?version=1697107013135&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/3821fe9b-0e60-4c5d-926d-9a2ecd83bbb6_full.jpg?version=1697107013135&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="114.99999999999999px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/product/1152891/haohang-girls-multi-coloured-off-shoulder-heart-print-casual-dress?funnel=Discover&amp;funnel_tile=CT72906&amp;funnel_section=New&amp;section=New&amp;subsection=CT72906&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/product/1152891/haohang-girls-multi-coloured-off-shoulder-heart-print-casual-dress"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/product/1152891/haohang-girls-multi-coloured-off-shoulder-heart-print-casual-dress?funnel=Discover&amp;funnel_tile=CT72906&amp;funnel_section=New&amp;section=New&amp;subsection=CT72906&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/72126ec7-f3d6-41f7-975c-bafa9be67d34_full.jpg?version=1697107016089&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/72126ec7-f3d6-41f7-975c-bafa9be67d34_full.jpg?version=1697107016089&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="114.99999999999999px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">
                                    <a ng-href="/moments/?funnel=Discover&amp;funnel_tile=CT72906&amp;funnel_section=New&amp;section=New&amp;subsection=CT72906&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/moments/"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/moments/?funnel=Discover&amp;funnel_tile=CT72906&amp;funnel_section=New&amp;section=New&amp;subsection=CT72906&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/9e37cbd8-c19f-4bc5-ab36-40c49c827e5c_full.jpg?version=1697107020252&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/9e37cbd8-c19f-4bc5-ab36-40c49c827e5c_full.jpg?version=1697107020252&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="11.666666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </new-custom-tile>
                </div>
                <div class="columns boutique-tile masonry-brick ng-scope"
                    ng-class="{'store-tile': boutique.type === 'STORE'}">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">

                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/91051b65-bf4e-4164-acfb-ac21d752b25d_full.jpg?version=1697099070032&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/91051b65-bf4e-4164-acfb-ac21d752b25d_full.jpg?version=1697099070032&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="8.88888888888889px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/33962/explore+more+for+all?funnel=Discover&amp;funnel_tile=CT72912&amp;funnel_section=New&amp;section=New&amp;subsection=CT72912&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/33962/Explore+more+for+all"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/33962/explore+more+for+all?funnel=Discover&amp;funnel_tile=CT72912&amp;funnel_section=New&amp;section=New&amp;subsection=CT72912&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/29353d14-b198-4f86-94dd-2208753e19e5_full.jpg?version=1697099074787&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/29353d14-b198-4f86-94dd-2208753e19e5_full.jpg?version=1697099074787&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="120.41666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/33964/explore+more+for+her?funnel=Discover&amp;funnel_tile=CT72912&amp;funnel_section=New&amp;section=New&amp;subsection=CT72912&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/33964/Explore+More+for+Her"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/33964/explore+more+for+her?funnel=Discover&amp;funnel_tile=CT72912&amp;funnel_section=New&amp;section=New&amp;subsection=CT72912&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/01a8bca1-a088-4f77-b99c-bcd1ebd6ee51_full.jpg?version=1697099077149&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/01a8bca1-a088-4f77-b99c-bcd1ebd6ee51_full.jpg?version=1697099077149&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="120.41666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/33963/explore+more+for+him?funnel=Discover&amp;funnel_tile=CT72912&amp;funnel_section=New&amp;section=New&amp;subsection=CT72912&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/33963/Explore+More+for+Him"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/33963/explore+more+for+him?funnel=Discover&amp;funnel_tile=CT72912&amp;funnel_section=New&amp;section=New&amp;subsection=CT72912&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/0880aafe-6a17-4441-a0fe-3213b9dd72b9_full.jpg?version=1697099079315&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/0880aafe-6a17-4441-a0fe-3213b9dd72b9_full.jpg?version=1697099079315&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="120.41666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </new-custom-tile>
                </div>
            </div>


            {{-- 3rd --}}
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="columns boutique-tile masonry-brick ng-scope"
                    ng-class="{'store-tile': boutique.type === 'STORE'}">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">

                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">
                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/7bd48ad3-f648-453e-9bb6-a60807b31824_full.jpg?version=1697205641983&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/7bd48ad3-f648-453e-9bb6-a60807b31824_full.jpg?version=1697205641983&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="9.305555555555555px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/22835/party+dresses?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/22835/Party+Dresses"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/22835/party+dresses?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/8e30fa25-d217-495e-9a0a-38b998b1f76b_full.jpg?version=1697205646420&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/8e30fa25-d217-495e-9a0a-38b998b1f76b_full.jpg?version=1697205646420&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="120.41666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/22834/dresses+jumpsuits?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/22834/Dresses+Jumpsuits"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/22834/dresses+jumpsuits?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/280bd78c-2fae-454d-a13b-f6514aa478b8_full.jpg?version=1697205649732&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/280bd78c-2fae-454d-a13b-f6514aa478b8_full.jpg?version=1697205649732&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="120.41666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/36797/matchy+sets?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36797/Matchy+Sets"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36797/matchy+sets?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/3e7cfde5-a096-49ea-8c3f-b0c6bfa66e5a_full.jpg?version=1697205653592&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/3e7cfde5-a096-49ea-8c3f-b0c6bfa66e5a_full.jpg?version=1697205653592&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="120.41666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36851/footies+bodysuits?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36851/Footies+Bodysuits"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36851/footies+bodysuits?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/dc9b7a9b-d20a-44e2-b506-f7426df9f190_full.jpg?version=1697205658286&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/dc9b7a9b-d20a-44e2-b506-f7426df9f190_full.jpg?version=1697205658286&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="130.41666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/37402/outerwear?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37402/Outerwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37402/outerwear?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/2b3107de-dad7-4080-bfa6-adaf5ec40430_full.jpg?version=1697205661597&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/2b3107de-dad7-4080-bfa6-adaf5ec40430_full.jpg?version=1697205661597&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="130.41666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/35597/ethnic+wear?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/35597/Ethnic+Wear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/35597/ethnic+wear?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/93651852-e12e-4048-9a99-032b6247779a_full.jpg?version=1697205664540&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/93651852-e12e-4048-9a99-032b6247779a_full.jpg?version=1697205664540&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="130.41666666666666px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/37399/outerwear?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37399/Outerwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37399/outerwear?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/f42cb9c9-8820-450b-a415-f86a7a4060de_full.jpg?version=1697205668498&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/f42cb9c9-8820-450b-a415-f86a7a4060de_full.jpg?version=1697205668498&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="119.58333333333333px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/22839/footwear?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/22839/Footwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/22839/footwear?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/6a72f659-71c9-4d75-abf3-a89116e1bedd_full.jpg?version=1697205671430&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/6a72f659-71c9-4d75-abf3-a89116e1bedd_full.jpg?version=1697205671430&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="119.58333333333333px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36333/tops+?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36333/Tops+"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36333/tops+?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/4dd2a40e-4d4a-4ddf-80a1-27f6abe105a9_full.jpg?version=1697205674448&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/4dd2a40e-4d4a-4ddf-80a1-27f6abe105a9_full.jpg?version=1697205674448&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="119.58333333333333px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36334/bottoms?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36334/Bottoms"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36334/bottoms?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/c96ff1c4-91df-41dd-8eb5-31d81a605050_full.jpg?version=1697205678439&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/c96ff1c4-91df-41dd-8eb5-31d81a605050_full.jpg?version=1697205678439&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="129.58333333333334px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36335/nightwear?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36335/Nightwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36335/nightwear?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/794bac97-43fa-4a3f-8acf-1d58d427825f_full.jpg?version=1697205681334&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/794bac97-43fa-4a3f-8acf-1d58d427825f_full.jpg?version=1697205681334&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="129.58333333333334px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36337/innerwear?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36337/Innerwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36337/innerwear?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/5b8f66df-39ad-422d-9fd6-0f73e6df8ced_full.jpg?version=1697205684052&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/5b8f66df-39ad-422d-9fd6-0f73e6df8ced_full.jpg?version=1697205684052&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="129.58333333333334px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/22840/add-ons?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/22840/Add-Ons"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/22840/add-ons?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/c10ad137-6ef8-4ca6-92f3-9dccdb76ee25_full.jpg?version=1697205688042&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/c10ad137-6ef8-4ca6-92f3-9dccdb76ee25_full.jpg?version=1697205688042&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="117.91666666666667px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36888/gifts?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36888/Gifts"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36888/gifts?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/3860a459-64cb-48d1-b554-c7fa5ef2cbcf_full.jpg?version=1697205690762&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/3860a459-64cb-48d1-b554-c7fa5ef2cbcf_full.jpg?version=1697205690762&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="117.91666666666667px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/37158/toys?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37158/Toys"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37158/toys?funnel=Discover&amp;funnel_tile=CT72885&amp;funnel_section=New&amp;section=New&amp;subsection=CT72885&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/5b0c644b-7e7d-44d1-8631-1afbfb3ab33a_full.jpg?version=1697205693579&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/5b0c644b-7e7d-44d1-8631-1afbfb3ab33a_full.jpg?version=1697205693579&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="117.91666666666667px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>

                        </div>
                    </new-custom-tile>
                </div>
                <div class="columns boutique-tile masonry-brick ng-scope"
                    ng-class="{'store-tile': boutique.type === 'STORE'}">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">

                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">
                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/19bac654-23b2-48e5-88d0-38f1328c5268_full.jpg?version=1697107344224&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/19bac654-23b2-48e5-88d0-38f1328c5268_full.jpg?version=1697107344224&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="10.416666666666668px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36901/explore+more+for+infants?funnel=Discover&amp;funnel_tile=CT72893&amp;funnel_section=New&amp;section=New&amp;subsection=CT72893&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36901/Explore+More+for+Infants"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36901/explore+more+for+infants?funnel=Discover&amp;funnel_tile=CT72893&amp;funnel_section=New&amp;section=New&amp;subsection=CT72893&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/dcccb910-d618-47d8-ba60-8124c425c3a4_full.jpg?version=1697107348553&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/dcccb910-d618-47d8-ba60-8124c425c3a4_full.jpg?version=1697107348553&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="121.875px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/36903/explore+more+for+toddler?funnel=Discover&amp;funnel_tile=CT72893&amp;funnel_section=New&amp;section=New&amp;subsection=CT72893&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36903/Explore+More+for+Toddler"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36903/explore+more+for+toddler?funnel=Discover&amp;funnel_tile=CT72893&amp;funnel_section=New&amp;section=New&amp;subsection=CT72893&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/f976fee8-6b42-4444-81e1-496eb70812b3_full.jpg?version=1697107351078&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/f976fee8-6b42-4444-81e1-496eb70812b3_full.jpg?version=1697107351078&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="121.875px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/36904/explore+more+for+child?funnel=Discover&amp;funnel_tile=CT72893&amp;funnel_section=New&amp;section=New&amp;subsection=CT72893&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36904/Explore+More+for+Child"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36904/explore+more+for+child?funnel=Discover&amp;funnel_tile=CT72893&amp;funnel_section=New&amp;section=New&amp;subsection=CT72893&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/9b6105f0-4bb4-4721-8b1b-c9a27848d54c_full.jpg?version=1697107353518&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/9b6105f0-4bb4-4721-8b1b-c9a27848d54c_full.jpg?version=1697107353518&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="121.875px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>

                        </div>
                    </new-custom-tile>
                </div>
                <div class="columns boutique-tile masonry-brick ng-scope"
                    ng-class="{'store-tile': boutique.type === 'STORE'}">
                    <new-custom-tile boutique="boutique" section="section" class="ng-isolate-scope">
                        <div class="boutique link" ng-class="{'no-border-radius' : 'STORE' === vm.boutique.type}">

                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details" style="">

                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="" is-promo-tile-url=""
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/dad76e3f-fc3a-47c1-a0da-8b4f688811bc_full.jpg?version=1697186804528&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/dad76e3f-fc3a-47c1-a0da-8b4f688811bc_full.jpg?version=1697186804528&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="10.625px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="/products/37040/winterwear+starts+from+199?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37040/Winterwear+Starts+From+199"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37040/winterwear+starts+from+199?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/34f288ed-2a6c-4779-87fe-ffab8c552dd3_full.jpg?version=1697186808522&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/34f288ed-2a6c-4779-87fe-ffab8c552dd3_full.jpg?version=1697186808522&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="19.895833333333332px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="/products/37041/wear+in+dussehra+under+999?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37041/Wear+in+Dussehra+Under+999"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37041/wear+in+dussehra+under+999?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/6d38a7a8-0e3b-4b68-80b7-5b6eac13c8d5_full.jpg?version=1697186813112&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/6d38a7a8-0e3b-4b68-80b7-5b6eac13c8d5_full.jpg?version=1697186813112&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="19.166666666666668px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">
                                    <a ng-href="/products/37043/min+40+per+off+on+casualwear?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/37043/Min+40+Per+Off+on+Casualwear"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/37043/min+40+per+off+on+casualwear?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/2c388a4e-6625-418a-9716-8a506c67cb9c_full.jpg?version=1697186817281&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/2c388a4e-6625-418a-9716-8a506c67cb9c_full.jpg?version=1697186817281&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="18.958333333333332px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="/products/36679/sale10?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36679/SALE10"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36679/sale10?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/af1d3c97-60da-4136-9552-acf69ffbda8c_full.jpg?version=1697186821157&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/af1d3c97-60da-4136-9552-acf69ffbda8c_full.jpg?version=1697186821157&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="22.604166666666668px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">

                                    <a ng-href="/products/36839/sale250?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36839/SALE250"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36839/sale250?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/eef35bd9-4093-4e2f-9d62-92662826a1a9_full.jpg?version=1697186825419&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/eef35bd9-4093-4e2f-9d62-92662826a1a9_full.jpg?version=1697186825419&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="23.125px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 100%;">
                                    <a ng-href="/products/36840/sale750?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36840/SALE750"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36840/sale750?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/0151bacd-0c10-492a-a6d4-2a01d1955304_full.jpg?version=1697186860514&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/0151bacd-0c10-492a-a6d4-2a01d1955304_full.jpg?version=1697186860514&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="27.8125px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                            </div>
                            <div class="row ng-scope" ng-repeat="tileRow in vm.boutique.tile_details">
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">

                                    <a ng-href="/products/36464/under+299?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36464/Under+299"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36464/under+299?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/fcdf47de-06af-421c-b0d2-8626e0b03657_full.jpg?version=1697186886758&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/fcdf47de-06af-421c-b0d2-8626e0b03657_full.jpg?version=1697186886758&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="98.75px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/36563/under+699?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36563/Under+699"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36563/under+699?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/146c52ec-91b9-4ccd-9272-8848bc31d637_full.jpg?version=1697186888949&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/146c52ec-91b9-4ccd-9272-8848bc31d637_full.jpg?version=1697186888949&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="98.75px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>

                                </div>
                                <div class="tile ng-scope" ng-repeat="tile in tileRow.tileGrid"
                                    ng-style="{width: (100 / tileRow.tileGrid.length) + '%'}"
                                    ng-class="{'tile-with-timer' : tile.timer }" style="width: 33.3333%;">
                                    <a ng-href="/products/36569/under+999?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New"
                                        is-promo-tile-url="/products/36569/Under+999"
                                        ng-click="vm.trackStore(vm.boutique, tile, $parent.$index, $index, $event)"
                                        class="ng-isolate-scope"
                                        href="/products/36569/under+999?funnel=Discover&amp;funnel_tile=CT72990&amp;funnel_section=New&amp;section=New&amp;subsection=CT72990&amp;from_screen=home&amp;from_section=New">

                                        <img lazy-img="https://static.hopscotch.in/fstatic/product/202310/bcbda56e-6ba3-408a-be00-32af13c495bc_full.jpg?version=1697186891306&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            src="https://static.hopscotch.in/fstatic/product/202310/bcbda56e-6ba3-408a-be00-32af13c495bc_full.jpg?version=1697186891306&amp;tr=w-480,c-at_max,dpr-2,n-medium"
                                            ng-style="{width: '100%', height:(tile.height/(tile.width))*100+'px'}"
                                            width="100%" height="98.75px" class="ng-isolate-scope"
                                            style="width: 100%; height: auto; opacity: 1; transition: opacity 1s ease-in-out 0s;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </new-custom-tile>
                </div>
                <div></div>
                <div></div>
                <div></div>
            </div>

        </div>
    </div>




@endsection
