<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('home');
    }
    public function blog(){
        return view('blog');
    }
    public function blog1(){
        return view('blog1');
    }
    public function blogDetails(){
        return view('blog-detail');
    }
    public function shop(){
        return view('shop');
    }
    public function test(){
        return view('test');
    }
    public function product(){
        return view('details');
    }
    public function cart(){
        return view('cart');
    }
    public function checkout(){
        return view('checkout');
    }
    public function checkoutPayment(){
        return view('checkout-payment');
    }
    public function order(){
        return view('order');
    }
    public function orderDetails(){
        return view('order-details');
    }
    public function trackOrder(){
        return view('track-order');
    }
    public function accountDetails(){
        return view('account-details');
    }
    public function accountaddress(){
        return view('account-address');
    }
    public function changePassword(){
        return view('change-password');
    }
    public function addAddress(){
        return view('add-address');
    }
    public function editAddress(){
        return view('edit-address');
    }
    public function supportTicket(){
        return view('support-ticket');
    }
    public function ticketDetails(){
        return view('ticket-details');
    }
    public function moments(){
        return view('moments');
    }
    public function momentdetails(){
        return view('moment-details');
    }
    public function momentProfile(){
        return view('moment-profile');
    }
}
