<div class="card">
    <div class="card-body">
        <aside class="axil-dashboard-aside">
            <nav class="axil-dashboard-nav">
                <div class="nav nav-tabs" role="tablist">
                    <a href="{{route('order')}}" class="nav-item nav-link active" role="tab" aria-selected="false" tabindex="-1"><i class="fas fa-shopping-basket"></i>&nbsp;&nbsp;My Orders</a>
                    {{-- <a href="#" class="nav-item nav-link" role="tab" aria-selected="true"><i class="fa-solid fa-coins"></i>&nbsp;&nbsp;My loyality points</a> --}}
                    <a href="{{route('trackOrder')}}" class="nav-item nav-link" role="tab" aria-selected="true"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Track your order</a>
                    {{-- <a href="#" class="nav-item nav-link" role="tab" aria-selected="true"><i class="fa-regular fa-heart"></i>&nbsp;&nbsp;Wishlist</a> --}}
                    <a href="{{route('accountDetails')}}" class="nav-item nav-link" role="tab" aria-selected="false" tabindex="-1"><i class="fas fa-user"></i>&nbsp;&nbsp;Account Details</a>
                    <a href="{{route('accountAddress')}}" class="nav-item nav-link" role="tab" aria-selected="false" tabindex="-1"><i class="fas fa-home"></i>&nbsp;&nbsp;Addresses</a>
                    <a href="{{route('supportTicket')}}" class="nav-item nav-link" role="tab" aria-selected="false" tabindex="-1"><i class="fa-solid fa-ticket"></i>&nbsp;&nbsp;Support ticket</a>
                    <a href="{{route('changePassword')}}" class="nav-item nav-link"  role="tab" aria-selected="false" tabindex="-1"><i class="fa-solid fa-lock"></i>&nbsp;&nbsp;Change password</a>
                    <a href="#" class="nav-item nav-link"  aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a>
                </div>
            </nav>
        </aside>
    </div>
</div>
